<?php if(!defined("__XE__"))exit;?><section id="tmpPageSizeLayer" class="x_modal x wgs" hidden>
	<button type="button" class="x_close" data-hide=".wgs, .x_modal-backdrop" onclick="$(document).trigger('click');">&times;</button>
	<form action="index.php"><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?? ''; ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?? ''; ?>" />
		<div class="x_modal-header">
			<h1><?php echo $lang->cmd_widget_size ?></h1>
		</div>
		<div class="x_modal-body">
			<table class="x_table x_table-striped x_table-hover">
				<col width="140" />
				<col />
				<col />
				<tr>
					<th><?php echo $lang->cmd_widget_css_class ?></th>
					<td colspan="2">
						<input type="text" name="css_class" id="css_class" value="" style="width:200px" />
					</td>
				</tr>
				<tr>
					<th><?php echo $lang->cmd_widget_align ?></th>
					<td colspan="2">
						<select name="widget_align">
							<option value="left"><?php echo $lang->cmd_widget_align_left ?></option>
							<option value="right"><?php echo $lang->cmd_widget_align_right ?></option>
						</select>
					</td>
				</tr>
				<tr>
					<th><?php echo $lang->cmd_widget_size ?></th>
					<td colspan="2">
						<label for="width" style="display:inline">W:</label> <input type="text" name="width" id="width" value="" /> 
						&nbsp;&nbsp;
						<label for="height" style="display:inline">H:</label> <input type="text" name="height" id="height" value="" />
					</td>
				</tr>
				<tr>
					<th rowspan="3"><?php echo $lang->cmd_widget_margin ?></th>
					<td colspan="2" style="text-align:center"><label for="margin_top" style="display:inline">T:</label> <input type="number" name="margin_top" id="margin_top" value="" /> px</td>
				</tr>
				<tr>
					<td style="text-align:left"><label for="margin_left" style="display:inline">L:</label> <input type="number" name="margin_left" id="margin_left" value="" /> px</td>
					<td style="text-align:right"><label for="margin_right" style="display:inline">R:</label> <input type="number" name="margin_right" id="margin_right" value="" /> px</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center"><label for="margin_bottom" style="display:inline">B:</label> <input type="number" name="margin_bottom" id="margin_bottom" value="" /> px</td>
				</tr>
				<tr>
					<th rowspan="3"><?php echo $lang->cmd_widget_padding ?></th>
					<td colspan="2" style="text-align:center"><label for="padding_top" style="display:inline">T:</label> <input type="number" name="padding_top" id="padding_top" value="" /> px</td>
				</tr>
				<tr>
					<td style="text-align:left"><label for="padding_left" style="display:inline">L:</label> <input type="number" name="padding_left" id="padding_left" value="" /> px</td>
					<td style="text-align:right"><label for="padding_right" style="display:inline">R:</label> <input type="number" name="padding_right" id="padding_right" value="" /> px</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center"><label for="padding_bottom" style="display:inline">B:</label> <input type="number" name="padding_bottom" id="padding_bottom" value="" /> px</td>
				</tr>
				<tr>
					<th rowspan="3"><?php echo $lang->cmd_widget_border ?></th>
					<td colspan="2" style="text-align:center">
						<input type="number" name="border_top_thick" value="" class="small_input" /> px
						<select name="border_top_type">
							<option value="solid"><?php echo $lang->cmd_widget_border_solid ?></option>
							<option value="dotted"><?php echo $lang->cmd_widget_border_dotted ?></option>
						</select>
						<input type="text" name="border_top_color" value="" class="color_input rx-spectrum" maxlength="7"/>
					</td>
				</tr>
				<tr>
					<td style="text-align:left">
						<input type="number" name="border_left_thick" value="" class="small_input" /> px
						<select name="border_left_type">
							<option value="solid"><?php echo $lang->cmd_widget_border_solid ?></option>
							<option value="dotted"><?php echo $lang->cmd_widget_border_dotted ?></option>
						</select>
						<input type="text" name="border_left_color" value="" class="color_input rx-spectrum" maxlength="7"/>
					</td>
					<td style="text-align:right">
						<input type="number" name="border_right_thick" value="" class="small_input" /> px
						<select name="border_right_type">
							<option value="solid"><?php echo $lang->cmd_widget_border_solid ?></option>
							<option value="dotted"><?php echo $lang->cmd_widget_border_dotted ?></option>
						</select>
						<input type="text" name="border_right_color" value="" class="color_input rx-spectrum" maxlength="7"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center">
						<input type="number" name="border_bottom_thick" value="" class="small_input" /> px
						<select name="border_bottom_type">
							<option value="solid"><?php echo $lang->cmd_widget_border_solid ?></option>
							<option value="dotted"><?php echo $lang->cmd_widget_border_dotted ?></option>
						</select>
						<input type="text" name="border_bottom_color" value="" class="color_input rx-spectrum" maxlength="7"/>
					</td>
				</tr>
				<tr>
					<th><?php echo $lang->cmd_widget_background_color ?></th>
					<td colspan="2"><input type="text" name="background_color" value="" class="input rx-spectrum" /></td>
				</tr>
				<tr>
					<th><?php echo $lang->cmd_widget_background_image_url ?></th>
					<td colspan="2">
						<div style="margin-bottom:5px"><input type="text" name="background_image_url" value="" style="width:400px"/></div>
						<div style="margin-bottom:5px">
							<select name="background_repeat">
								<option value="repeat"><?php echo $lang->cmd_widget_background_image_repeat ?></option>
								<option value="no-repeat"><?php echo $lang->cmd_widget_background_image_no_repeat ?></option>
								<option value="repeat-x"><?php echo $lang->cmd_widget_background_image_x_repeat ?></option>
								<option value="repeat-y"><?php echo $lang->cmd_widget_background_image_y_repeat ?></option>
							</select>
						</div>
						<div style="margin-bottom:5px">
							<?php echo $lang->cmd_widget_background_image_x ?> : <input type="text" name="background_x" value="0" />
						</div>
						<div style="margin-bottom:5px">
							<?php echo $lang->cmd_widget_background_image_y ?> : <input type="text" name="background_y" value="0" />
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="x_modal-footer">
			<input class="x_btn x_btn-inverse" type="submit" value="<?php echo $lang->cmd_save ?>" />
		</div>
	</form>
	<style scoped>
	.wgs{margin:0;width:700px}
	.wgs select{margin:0;width:auto}
	.wgs input{margin:0!important;width:60px}
	</style>
</section>
<!--#JSPLUGIN:spectrum--><?php Context::loadJavascriptPlugin('spectrum'); ?>
