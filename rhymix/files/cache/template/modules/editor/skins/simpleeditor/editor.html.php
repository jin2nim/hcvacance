<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/editor/tpl/js/editor_common.js--><?php Context::loadFile(['modules/editor/tpl/js/editor_common.js', '', '', '']); ?>
<!--#Meta:modules/editor/skins/simpleeditor/css/simpleeditor.less--><?php Context::loadFile(['modules/editor/skins/simpleeditor/css/simpleeditor.less', '', '', '', []]); ?>
<!--#Meta:modules/editor/skins/simpleeditor/js/simpleeditor.js--><?php Context::loadFile(['modules/editor/skins/simpleeditor/js/simpleeditor.js', '', '', '']); ?>
<!--#Meta:modules/editor/skins/simpleeditor/js/interface.js--><?php Context::loadFile(['modules/editor/skins/simpleeditor/js/interface.js', '', '', '']); ?>
<div id="simpleeditor_wrapper_<?php echo $__Context->editor_sequence ?>" class="rx_simpleeditor_wrapper">
	<div id="simpleeditor_instance_<?php echo $__Context->editor_sequence ?>" class="rx_simpleeditor <?php echo $__Context->colorset ?> rhymix_content editable" contenteditable="true"
		data-editor-sequence="<?php echo $__Context->editor_sequence ?>"
		data-editor-primary-key-name="<?php echo $__Context->editor_primary_key_name ?>"
		data-editor-content-key-name="<?php echo $__Context->editor_content_key_name ?>"
		data-editor-height="<?php echo $__Context->editor_height ?>">
	</div>
	<?php if($__Context->allow_fileupload){ ?>
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/editor/skins/ckeditor','file_upload.html') ?>
	<?php } ?>
</div>
