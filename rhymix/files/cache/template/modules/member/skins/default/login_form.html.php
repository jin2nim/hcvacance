<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/member/skins/default/filter','openid_login.xml');$__xmlFilter->compile(); ?>
<div class="signin">
	<div class="login-header">
		<h1><i class="icon-user"></i> <?php echo $lang->cmd_login ?></h1>
	</div>
	<div class="login-body">
		<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/skins'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
			<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
		</div><?php } ?>
		<?php Context::addJsFile("./files/ruleset/login.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" id="fo_member_login"><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?? ''; ?>" /><input type="hidden" name="ruleset" value="@login" />
			<input type="hidden" name="success_return_url" value="<?php echo $__Context->referer_url ?>" />
			<input type="hidden" name="act" value="procMemberLogin" />
			<input type="hidden" name="xe_validator_id" value="modules/member/skins" />
			<fieldset>
				<div class="control-group">
					<?php if($__Context->identifier == 'user_id'){ ?><input type="text" name="user_id" id="uid" required placeholder="<?php echo $lang->user_id ?>" title="<?php echo $lang->user_id ?>" /><?php } ?>
					<?php if($__Context->identifier != 'user_id'){ ?><input type="email" name="user_id" id="uid" required placeholder="<?php echo $lang->email_address ?>" title="<?php echo $lang->email_address ?>" /><?php } ?>
					<input type="password" name="password" id="upw" required placeholder="<?php echo $lang->password ?>" title="<?php echo $lang->password ?>" />
				</div>
				<?php if($__Context->captcha){ ?><div class="control-group captcha">
					<?php echo $__Context->captcha ?>
				</div><?php } ?>
				<div class="control-group">
					<label for="keepid_opt">
						<input type="checkbox" name="keep_signed" id="keepid_opt" value="Y" />
						<?php echo $lang->keep_signed ?>
					</label>
					<div id="warning">
						<p><?php echo $lang->about_keep_warning ?></p>
					</div>
					<input type="submit" value="<?php echo $lang->cmd_login ?>" class="submit btn btn-inverse" />
				</div>
			</fieldset>
		</form>
	</div>
	<div class="login-footer">
		<a href="<?php echo getUrl('act','dispMemberFindAccount') ?>"><?php echo $lang->cmd_find_member_account ?></a>
		|
		<a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $lang->cmd_signup ?></a>
	</div>
</div>
<script>
jQuery(function($){
	var keep_msg = $('#warning');
	keep_msg.hide();
	$('#keepid_opt').change(function(){
		if($(this).is(':checked')){
			keep_msg.slideDown(200);
		} else {
			keep_msg.slideUp(200);
		}
	});
});
</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_footer.html') ?>
