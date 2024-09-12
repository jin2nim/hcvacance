<?php 
require_once('/hcvacance/www/rhymix/common/autoload.php');
Context::init(); 
header("Content-Type: text/xml; charset=UTF-8");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$lang_type = Context::getLangType();
$is_logged = Context::get('is_logged');
$logged_info = Context::get('logged_info');
$site_srl = 0;
$site_admin = false;
if($site_srl) {
  $oModuleModel = getModel('module');
  $site_module_info = $oModuleModel->getSiteInfo($site_srl);
  if($site_module_info) Context::set('site_module_info',$site_module_info);
  else $site_module_info = Context::get('site_module_info');
  $grant = $oModuleModel->getGrant($site_module_info, $logged_info);
  if($grant->manager ==1) $site_admin = true;
}
if($is_logged) {
  if($logged_info->is_admin=="Y") $is_admin = true;
  else $is_admin = false;
  $group_srls = array_keys($logged_info->group_list);
} else {
  $is_admin = false;
  $group_srls = array();
}
$oContext->close(); ?>
<root><node node_srl="116" parent_srl="0" menu_name_key='리뷰게시판' text="<?php if(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, [-3])))||($is_logged&&0))) { $_names = array('ko' => '리뷰게시판', 'en' => '리뷰게시판', 'ja' => '리뷰게시판', 'zh-CN' => '리뷰게시판', 'zh-TW' => '리뷰게시판', 'de' => '리뷰게시판', 'es' => '리뷰게시판', 'fr' => '리뷰게시판', 'mn' => '리뷰게시판', 'ru' => '리뷰게시판', 'tr' => '리뷰게시판', 'vi' => '리뷰게시판', 'id' => '리뷰게시판', ); print $_names[$lang_type]; }?>" url="<?php print(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, [-3])))||($is_logged&&0))?'board_event_review':"")?>" href="<?php print(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, [-3])))||($is_logged&&0))?getSiteUrl('', '','mid','board_event_review'):"")?>" is_shortcut='N' icon='' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, [-3])))||($is_logged&&0))) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="118" parent_srl="0" menu_name_key='리뷰페이지' text="<?php if(true) { $_names = array('ko' => '리뷰페이지', 'en' => '리뷰페이지', 'ja' => '리뷰페이지', 'zh-CN' => '리뷰페이지', 'zh-TW' => '리뷰페이지', 'de' => '리뷰페이지', 'es' => '리뷰페이지', 'fr' => '리뷰페이지', 'mn' => '리뷰페이지', 'ru' => '리뷰페이지', 'tr' => '리뷰페이지', 'vi' => '리뷰페이지', 'id' => '리뷰페이지', ); print $_names[$lang_type]; }?>" url="<?php print(true?'review_page':"")?>" href="<?php print(true?getSiteUrl('', '','mid','review_page'):"")?>" is_shortcut='N' icon='' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></root>