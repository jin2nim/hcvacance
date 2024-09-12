<?php 
if(!defined("__XE__")) exit();
$menu = new stdClass();
$_menu_names = $_menu_names ?? [];
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
}; 
$_menu_names[116] = array("ko"=>'리뷰게시판',"en"=>'리뷰게시판',"ja"=>'리뷰게시판',"zh-CN"=>'리뷰게시판',"zh-TW"=>'리뷰게시판',"de"=>'리뷰게시판',"es"=>'리뷰게시판',"fr"=>'리뷰게시판',"mn"=>'리뷰게시판',"ru"=>'리뷰게시판',"tr"=>'리뷰게시판',"vi"=>'리뷰게시판',"id"=>'리뷰게시판',); $_menu_names[118] = array("ko"=>'리뷰페이지',"en"=>'리뷰페이지',"ja"=>'리뷰페이지',"zh-CN"=>'리뷰페이지',"zh-TW"=>'리뷰페이지',"de"=>'리뷰페이지',"es"=>'리뷰페이지',"fr"=>'리뷰페이지',"mn"=>'리뷰페이지',"ru"=>'리뷰페이지',"tr"=>'리뷰페이지',"vi"=>'리뷰페이지',"id"=>'리뷰페이지',); ; 
$menu->list = array(116 => array(
				"node_srl" => 116,
				"parent_srl" => 0,
				"menu_name_key" => '리뷰게시판',
				"isShow" => (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, [-3])))||($is_logged && 0)) ? true : false),
				"text" => (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, [-3])))||($is_logged && 0)) ? $_menu_names[116][$lang_type] : ""),
				"href" => (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, [-3])))||($is_logged && 0)) ? getSiteUrl('', '','mid','board_event_review') : ""),
				"url" => (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, [-3])))||($is_logged && 0)) ? 'board_event_review' : ""),
				"is_shortcut" => 'N',
				"icon" => '',
				"desc" => '',
				"open_window" => 'N',
				"normal_btn" => '',
				"hover_btn" => '',
				"active_btn" => '',
				"selected" => (array("board_event_review") && in_array(Context::get("mid"), array("board_event_review")) ? 1 : 0),
				"expand" => 'N',
				"list" => array(),
				"link" => (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, [-3])))||($is_logged && 0)) ? (array("board_event_review") && in_array(Context::get("mid"), array("board_event_review")) ? $_menu_names[116][$lang_type] : $_menu_names[116][$lang_type]) : "")
),
118 => array(
				"node_srl" => 118,
				"parent_srl" => 0,
				"menu_name_key" => '리뷰페이지',
				"isShow" => (true ? true : false),
				"text" => (true ? $_menu_names[118][$lang_type] : ""),
				"href" => (true ? getSiteUrl('', '','mid','review_page') : ""),
				"url" => (true ? 'review_page' : ""),
				"is_shortcut" => 'N',
				"icon" => '',
				"desc" => '',
				"open_window" => 'N',
				"normal_btn" => '',
				"hover_btn" => '',
				"active_btn" => '',
				"selected" => (array("review_page") && in_array(Context::get("mid"), array("review_page")) ? 1 : 0),
				"expand" => 'N',
				"list" => array(),
				"link" => (true ? (array("review_page") && in_array(Context::get("mid"), array("review_page")) ? $_menu_names[118][$lang_type] : $_menu_names[118][$lang_type]) : "")
),
); 
if(!$is_admin) { recurciveExposureCheck($menu->list); }
Context::set("included_menu", $menu); ?>
