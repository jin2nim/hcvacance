<?php /* 2.0.14:widget_cache#0:f5e6966d0e0f93f13dd241d3165dc95e6217ec5b */
return unserialize('a:2:{i:0;i:1629550440;i:1;O:8:"stdClass":2:{s:7:"content";s:1738:"<!--#Meta:widgets/xns_widget_event_document/skins/xns_widget_event_document_skin/css/widget.css--><div class="admin_outpage_wrap">
  <div class="item_header">
    <ul class="header_sido_list">
      <li><a class="on" href="/rhymix/review_page">1차전체</a></li>
          </ul>
      </div>
  <div class="item_list_area">
    <div class="title_bar">
              1차분류
                    목록
    </div>  
    <ul class="region_list item_list" id="region_list">
          </ul>
  </div>
</div>
<script>
//분류확장 업데이트
function insertRealestateCategoryExtend(form_selector){
  var params = {}; //오브젝트형 배열
  var form_data = jQuery(form_selector).serialize();
  form_data = form_data.split(\'&\');
  for (var i in form_data){
    var param_item = form_data[i];
    param_item = param_item.split(\'=\');
    params[param_item[0]] = param_item[1];
  }
  exec_json(\'realestatexn.procRealestatexnAdminCategoryExtendInsert\', params, function(ret_obj){
      var error = ret_obj.error;
      var message = ret_obj.message;
      if(message==\'success\'){
        location.reload();
      }
  });
}
//분류확장 업데이트
function updateRealestateCategoryExtend(form_selector){
  var params = {}; //오브젝트형 배열
  var form_data = jQuery(form_selector).serialize();
  form_data = form_data.split(\'&\');
  for (var i in form_data){
    var param_item = form_data[i];
    param_item = param_item.split(\'=\');
    params[param_item[0]] = param_item[1];
  }
  exec_json(\'realestatexn.procRealestatexnAdminCategoryExtendUpdate\', params, function(ret_obj){
      var error = ret_obj.error;
      var message = ret_obj.message;
      if(message==\'success\'){
        location.reload();
      }
  });
}
</script>
";s:9:"variables";O:8:"stdClass":0:{}}}');