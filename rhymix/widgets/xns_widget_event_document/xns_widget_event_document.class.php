<?php
    /**
     * @author XNS (xnssolution@gmail.com)
     * @version 0.1
     **/

 


    class xns_widget_event_document extends WidgetHandler {
        function proc($args) {


          if($args->module_srl){
            $oModuleModel = &getModel('module');
            $oDocumentModel = &getModel('document');
            Context::set('oModuleModel',$oModuleModel);
            Context::set('oDocumentModel',$oDocumentModel);

            if(!$args->list_count) $args->list_count = 10;
            if(!$args->page_count) $args->page_count = 5;
            if(!$args->sort_index) $args->sort_index = 'regdate';
            if(!$args->order_type) $args->order_type = 'desc';

            //게시판 모듈정보 설정
            $board_module_info = $oModuleModel->getModuleInfoByModuleSrl($args->module_srl);
            $board_grant = $oModuleModel->getGrant($board_module_info, Context::get('logged_info'));
            Context::set('board_grant',$board_grant);


            //게시글 등록 설정
            if(Context::get('xns_ajax')=='y' && Context::get('query_type')=='insert'){
              $docu_obj = new stdClass();
              $docu_obj->module_srl = $args->module_srl;
              $docu_obj->document_srl = getNextSequence();
              $docu_obj->title = Context::get('user_name').' ('.Context::get('phone_number').')님 오행시입니다.';
              $docu_obj->content = nl2br(Context::get('event_content'));
              $docu_obj->nick_name = Context::get('user_name');
              $docu_obj->user_name = Context::get('user_name');
              $docu_obj->email_address = Context::get('phone_number').'@xcrew.co.kr'; //핸드폰번호로 할 것
              $docu_obj->list_order = -$docu_obj->document_srl;
              $docu_output = executeQuery('document.insertDocument', $docu_obj);
              if($docu_output->toBool()){
                $result_msg = '';
              } else {
                $result_msg = '등록실패';
              }
              Context::set('result_msg',$result_msg);
            }

            //게시글 삭제 설정
            if(Context::get('xns_ajax')=='y' && Context::get('query_type')=='delete'){
              $itemDocument = $oDocumentModel->getDocument(Context::get('item_srl'));
              $email_address = Context::get('phone_number').'@xcrew.co.kr';
              if($email_address==$itemDocument->get('email_address')){
                $docu_obj = new stdClass();
                $docu_obj->document_srl = Context::get('item_srl');
                $docu_output = executeQuery('document.deleteDocument', $docu_obj);
              }
              if($docu_output->toBool()){
                $result_msg = '';
              } else {
                $result_msg = '삭제실패';
              }
              Context::set('result_msg',$result_msg);
            }


            //게시판 목록출력 설정
            if(Context::get('xns_ajax')!='y'){
              if(Context::get('page')){
                $page = Context::get('page');
              } else {
                $page = 1;
              }
              $docu_obj = new stdClass();
              $docu_obj->module_srl = $args->module_srl;
              $docu_obj->list_count = $args->list_count;
              $docu_obj->page_count = $args->page_count;
              $docu_obj->page = $page;
              $docu_obj->sort_index = $args->sort_index;
              $docu_obj->order_type = $args->order_type;
              $docu_output = executeQueryArray('document.getDocumentList', $docu_obj);
              $docu_list = $docu_output->data;
              $page_navigation = $docu_output->page_navigation;
              $total_count = $docu_output->total_count;
              $total_page = $docu_output->total_page;
              Context::set('docu_list',$docu_list);
              Context::set('page_navigation',$page_navigation);
              Context::set('page',$page);
              Context::set('total_count',$total_count);
              Context::set('total_page',$total_page);
            }

          }


          //최종 템플릿 변수 설정
          Context::set('docu_obj', $args);

          //템플릿 객체생성 및 스킨파일 컴파일//
          $oTemplate = &TemplateHandler::getInstance();
          $tpl_path = sprintf('%sskins/%s', $this->widget_path, $args->skin);
          Context::set('skin_path', $tpl_path.'/');
          return $oTemplate->compile($tpl_path, "event_document");

        }
    }
?>
