<?php if(!defined("__XE__"))exit;
$__Context->skin_path = str_replace(_XE_PATH_,'',$__Context->tpl_path) ?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<!--#Meta:widgets/xns_widget_event_document/skins/xns_widget_event_document_skin/css/widget.css--><?php Context::loadFile(['widgets/xns_widget_event_document/skins/xns_widget_event_document_skin/css/widget.css', '', '', '', []]); ?>
<?php if($__Context->xns_ajax=='y'){ ?><div id="result_msg"></div><?php } ?>
<?php if($__Context->xns_ajax!='y'){ ?><div class="xns_widget_event_document_skin">
  <form action="./" method="post" id="form_insert_event" class="form_insert_event" >
    <input type="hidden" name="vid" value="<?php echo $__Context->vid ?>"<?php if(!$__Context->vid){ ?> disabled<?php } ?> />
    <input type="hidden" name="act" value="<?php echo $__Context->act ?>"<?php if(!$__Context->act){ ?> disabled<?php } ?> />
    <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
    <input type="hidden" name="page" value="" />
    <input type="hidden" name="xns_ajax" value="y" />
    <input type="hidden" name="query_type" value="insert" />
    <div class="input_field">
      <table border="0" cellspacing="0">
        <tr>
          <th class="name">이름</th>
          <td class="name-text">
            <input type="text" name="user_name" value="" id="input_user_name" placeholder="이름" required />
          </td>
        </tr>
        <tr>
          <th class="phone">연락처</th>
          <td class="phone-text">
            <input type="number" name="phone_number" value="" id="input_phone_number" placeholder="01012345678" min="0" required />
          </td>
        </tr>
        <tr>
          <th class="context-area">"너의<br/>합천 여행<br/>계획을<br/>알려줘"</th>
          <td class="context-text">
            <textarea name="event_content" placeholder="500자 이상 정성스러운 합천 여행 계획을 알려주세요. 정성스럽게 글을 작성해 주실수록 당첨 확률이 높아집니다!" required></textarea>
          </td>
        </tr>
      </table>
    </div>
    <button>등록</button>
  </form>
  <ul class="docu_list" id="docu_list">
    <?php if($__Context->docu_list)foreach($__Context->docu_list as $__Context->key => $__Context->val){ ?>
      <?php  $__Context->item_document = $__Context->oDocumentModel->getDocument($__Context->val->document_srl) ?>
      <li>
        <div class="user_name">
          <?php  $__Context->user_name = substr($__Context->item_document->get('user_name'),0,3) ?>
          <?php echo $__Context->user_name ?>○○
          <span class="date">
            <?php echo $__Context->item_document->getRegdate('Y.m.d H:i:s') ?>
          </span>
        </div>
        <div class="content">
          <?php echo nl2br($__Context->item_document->getContent(false)) ?>
        </div>
      </li>
    <?php } ?>
  </ul>
  <div class="pagination" id="more_pagination">
    <?php if($__Context->page<$__Context->total_page){ ?><a href="#" onclick="ajaxAddDocumentList('#docu_list','#more_pagination','<?php echo $__Context->page+1 ?>'); return false;">더보기</a><?php } ?>
  </div>
	<!--div class="pagination">
		<a href="<?php echo getUrl('page','') ?>" class="direction prev"><i class="fas fa-chevron-left"></i></a> 
		<?php while($__Context->page_no=$__Context->page_navigation->getNextPage()){ ?>
			<?php if($__Context->page==$__Context->page_no){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?>
			<?php if($__Context->page!=$__Context->page_no){ ?><a href="<?php echo getUrl('page',$__Context->page_no,'document_srl') ?>"><?php echo $__Context->page_no ?></a><?php } ?>
		<?php } ?>
		<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','') ?>" class="direction next"><i class="fas fa-chevron-right"></i></a>
	</div--><?php } ?>
</div>
<div class="top-btn">
  <img src="/rhymix/widgets/xns_widget_event_document/skins/xns_widget_event_document_skin/top-btn.png" alt="top">
</div>
<script>
  $(function(){
      $('.top-btn').click(function(){
          $('html,body').animate({
              scrollTop:0
          }, 'slow');
      });
  });
</script>
<script>
//오행시 목록추가 함수
function ajaxAddDocumentList(list_selector,page_selector,page){
  var ajax_data = current_url;
  ajax_data = ajax_data.replace(default_url,'');
  ajax_data = ajax_data.replace('?','');
  ajax_data = ajax_data + '&page='+page;
  //아작스 실행
  var url = "./";
  jQuery.ajax({
    type: 'get',
    url: url,
    data: ajax_data,
    success: function (data) {
      var response = jQuery(data);
      //목록추가 설정
      if(response.filter(list_selector).html()){
        var list_result_msg_html = response.filter(list_selector).html();
      } else if(response.find(list_selector).html()){
        var list_result_msg_html = response.find(list_selector).html();
      }
      if(list_result_msg_html){
        jQuery(list_selector).append(list_result_msg_html);
      }
      //더보기버튼 설정
      jQuery(page_selector).hide();
      if(response.filter(page_selector).html()){
        var page_result_msg_html = response.filter(page_selector).html();
      } else if(response.find(page_selector).html()){
        var page_result_msg_html = response.find(page_selector).html();
      }
      if(page_result_msg_html){
        jQuery(page_selector).html(page_result_msg_html);
        jQuery(page_selector).show();
      }
      return false;
    },
    error: function (request, status, error) {
      console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
      return false;
    }
  });
}
//댓글 전송 코드
jQuery('#form_insert_event').submit(function(){
  var ajax_data = jQuery(this).serialize();
  //아작스 실행
  var url = "./";
  jQuery.ajax({
    type: 'post',
    url: url,
    data: ajax_data,
    success: function (data) {
      var response = jQuery(data);
      //정렬영역 설정
      if(response.filter('#result_msg').html()){
        var result_msg_html = response.filter('#result_msg').html();
      } else if(response.find('#result_msg').html()){
        var result_msg_html = response.find('#result_msg').html();
      }
      if(result_msg_html){
        alert(result_msg_html);
      } else {
        location.reload();
      }
      return false;
    },
    error: function (request, status, error) {
      console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
      return false;
    }
  });
  return false;
});
//분류확장 업데이트
function insertRealestateCategoryExtend(form_selector){
  var params = {}; //오브젝트형 배열
  var form_data = jQuery(form_selector).serialize();
  form_data = form_data.split('&');
  for (var i in form_data){
    var param_item = form_data[i];
    param_item = param_item.split('=');
    params[param_item[0]] = param_item[1];
  }
  exec_json('realestatexn.procRealestatexnAdminCategoryExtendInsert', params, function(ret_obj){
      var error = ret_obj.error;
      var message = ret_obj.message;
      if(message=='success'){
        location.reload();
      }
  });
}
//분류확장 업데이트
function updateRealestateCategoryExtend(form_selector){
  var params = {}; //오브젝트형 배열
  var form_data = jQuery(form_selector).serialize();
  form_data = form_data.split('&');
  for (var i in form_data){
    var param_item = form_data[i];
    param_item = param_item.split('=');
    params[param_item[0]] = param_item[1];
  }
  exec_json('realestatexn.procRealestatexnAdminCategoryExtendUpdate', params, function(ret_obj){
      var error = ret_obj.error;
      var message = ret_obj.message;
      if(message=='success'){
        location.reload();
      }
  });
}
</script>
