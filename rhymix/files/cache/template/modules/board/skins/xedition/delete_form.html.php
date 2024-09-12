<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xedition','_header.html') ?>
<?php if($__Context->oDocument->isExists()){ ?><div class="context_data">
	<h3 class="title"><?php echo $__Context->oDocument->getTitle() ?></h3>
	<p class="author">
		<strong><?php echo $__Context->oDocument->getNickName() ?></strong>
	</p>
</div><?php } ?>
<form action="./" method="get" onsubmit="return procFilter(this, delete_document)" class="context_message"><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?? ''; ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
	<h1><?php echo sprintf($lang->comfirm_act_msg,$lang->document,$lang->cmd_delete,$lang->msg_rul) ?></h1>
	<div class="btnArea">
		<input type="submit" class="btn" value="<?php echo $lang->cmd_delete ?>" />
		<button type="button" class="btn" onclick="history.back()"><?php echo $lang->cmd_cancel ?></button>
	</div>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xedition','_footer.html') ?>
