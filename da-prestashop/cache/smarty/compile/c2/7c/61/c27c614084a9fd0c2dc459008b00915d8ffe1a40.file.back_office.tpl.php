<?php /* Smarty version Smarty-3.1.19, created on 2016-02-27 19:17:28
         compiled from "/Users/liviobattet/www/DA/da-prestashop/modules/paypal//views/templates/admin/back_office.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177977134156d1e83863dc27-94948891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c27c614084a9fd0c2dc459008b00915d8ffe1a40' => 
    array (
      0 => '/Users/liviobattet/www/DA/da-prestashop/modules/paypal//views/templates/admin/back_office.tpl',
      1 => 1456597042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177977134156d1e83863dc27-94948891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PayPal_logo' => 0,
    'PayPal_content' => 0,
    'default_lang_iso' => 0,
    'PayPal_country' => 0,
    'Countries' => 0,
    'country' => 0,
    'PayPal_country_id' => 0,
    'PayPal_business' => 0,
    'PayPal_WPS' => 0,
    'PayPal_allowed_methods' => 0,
    'PayPal_HSS' => 0,
    'PayPal_payment_method' => 0,
    'PayPal_ECS' => 0,
    'PayPal_api_username' => 0,
    'PayPal_api_password' => 0,
    'PayPal_api_signature' => 0,
    'PayPal_api_business_account' => 0,
    'PayPal_integral_evolution_solution' => 0,
    'PayPal_integral_evolution_template' => 0,
    'PayPal_express_checkout_shortcut' => 0,
    'PayPal_in_context_checkout' => 0,
    'PayPal_in_context_checkout_merchant_id' => 0,
    'PayPal_login' => 0,
    'PayPal_login_client_id' => 0,
    'PayPal_login_secret' => 0,
    'PayPal_login_tpl' => 0,
    'PayPal_sandbox_mode' => 0,
    'PayPal_payment_capture' => 0,
    'PayPal_save_success' => 0,
    'PayPal_save_failure' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56d1e838909681_80515686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d1e838909681_80515686')) {function content_56d1e838909681_80515686($_smarty_tpl) {?>

<div id="paypal-wrapper">

	

	<div class="box half left">
		<?php if (isset($_smarty_tpl->tpl_vars['PayPal_logo']->value['LocalPayPalLogoLarge'])) {?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['PayPal_logo']->value['LocalPayPalLogoLarge'];?>
" alt="" style="margin-bottom: -5px" />
		<?php }?>
		<p id="paypal-slogan"><span class="dark"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['leader'];?>
</span> <span class="light"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['online_payment'];?>
</span></p>
		<p><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['tagline'];?>
</p>
	</div>

	<div class="box half right">
		<ul class="tick"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['benefits'];?>
</ul>
	</div>
	
	<?php if ($_smarty_tpl->tpl_vars['default_lang_iso']->value=='fr') {?>
	<div class="clear"></div><hr />
	<div class="box">
	<?php echo smartyTranslate(array('s'=>'Download the ','mod'=>'paypal'),$_smarty_tpl);?>
<a href="http://altfarm.mediaplex.com/ad/ck/3484-197941-8030-54"> <?php echo smartyTranslate(array('s'=>'Paypal Integration Guide','mod'=>'paypal'),$_smarty_tpl);?>
</a> <?php echo smartyTranslate(array('s'=>'on PrestaShop and follow the configuration step by step','mod'=>'paypal'),$_smarty_tpl);?>

		
	</div>
	<?php } else { ?>
	<div class="clear"></div><hr />
	<div class="box">
	<?php echo smartyTranslate(array('s'=>'Download the ','mod'=>'paypal'),$_smarty_tpl);?>
<a href="http://altfarm.mediaplex.com/ad/ck/3484-197941-8030-169"> <?php echo smartyTranslate(array('s'=>'Paypal Integration Guide','mod'=>'paypal'),$_smarty_tpl);?>
</a> <?php echo smartyTranslate(array('s'=>'on PrestaShop and follow the configuration step by step','mod'=>'paypal'),$_smarty_tpl);?>

		
	</div>

	<?php }?>
	<div class="clear"></div><hr>

	<form method="post" action="<?php echo mb_convert_encoding(htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" id="paypal_configuration">
		
		<div class="box">
			<div style="line-height: 18px;"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['expectations'];?>
</div>
			<div style="line-height: 20px; margin-top: 8px">
				<div>
					<label><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['your_country'];?>
 :
						<?php echo $_smarty_tpl->tpl_vars['PayPal_country']->value;?>
&nbsp;&nbsp;&nbsp;<a href="#" id="paypal_country_change" class="small"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['change_country'];?>
</a>
					</label>

					<div class="paypal-hide" id="paypal-country-form-content">
						<h3><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['country_change_title'];?>
 :</h3>

						<select name="paypal_country_default" id="paypal_country_default">
						<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id_country'];?>
" <?php if ($_smarty_tpl->tpl_vars['country']->value['id_country']==$_smarty_tpl->tpl_vars['PayPal_country_id']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
</option>
						<?php } ?>
						</select>

						<br />
						<br />
					</div>
				</div>

				<label><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['paypal_account'];?>
 ?</label>
				<input type="radio" name="business" id="paypal_business_account_no" value="0" <?php if ($_smarty_tpl->tpl_vars['PayPal_business']->value==0) {?>checked="checked"<?php }?> /> <label for="paypal_business_account_no"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['no'];?>
</label>
				<input type="radio" name="business" id="paypal_business_account_yes" value="1" style="margin-left: 14px" <?php if ($_smarty_tpl->tpl_vars['PayPal_business']->value==1) {?>checked="checked"<?php }?> /> <label for="paypal_business_account_yes"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['yes'];?>
</label>
			</div>
		</div>

		<div class="clear"></div><hr />

		
		<div class="box">

			<div class="box right half" id="paypal-call-button">
				<div id="paypal-call" class="box right"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['customer_support'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['PayPal_content']->value['customer_support_image'])) {?><img src="../modules/paypal/views/img/<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['customer_support_image'];?>
.png" width="14px" alt="Phone" /><?php }?></div>
				<div id="paypal-call-foonote" class="box right clear"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['support_foonote'];?>
</div>
			</div>

			<span class="paypal-section">1</span> <h3 class="inline"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['select_solution'];?>
</h3> <?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['learn_more'];?>


			<br /><br /><br />

			<?php if ((in_array($_smarty_tpl->tpl_vars['PayPal_WPS']->value,$_smarty_tpl->tpl_vars['PayPal_allowed_methods']->value)||in_array($_smarty_tpl->tpl_vars['PayPal_HSS']->value,$_smarty_tpl->tpl_vars['PayPal_allowed_methods']->value))) {?>
				<h4 class="inline"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['sole_solution_section_title'];?>
</h4> <img src="<?php echo $_smarty_tpl->tpl_vars['PayPal_logo']->value['BackOfficeCards'];?>
" height="22px"/>
				<div class="clear"></div>
				<div class="form-block">
					<?php if ((in_array($_smarty_tpl->tpl_vars['PayPal_WPS']->value,$_smarty_tpl->tpl_vars['PayPal_allowed_methods']->value))) {?>
						
						<label for="paypal_payment_wps">
							<input type="radio" name="paypal_payment_method" id="paypal_payment_wps" value='<?php echo $_smarty_tpl->tpl_vars['PayPal_WPS']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['PayPal_payment_method']->value==$_smarty_tpl->tpl_vars['PayPal_WPS']->value) {?>checked="checked"<?php }?> />
							<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['choose'];?>
 <?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['website_payment_standard'];?>

							<br />
							<span class="description"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['website_payment_standard_tagline'];?>
</span>
						</label>
					<?php }?>

					<?php if ((in_array($_smarty_tpl->tpl_vars['PayPal_HSS']->value,$_smarty_tpl->tpl_vars['PayPal_allowed_methods']->value))) {?>
						
						<br />
						<label for="paypal_payment_wpp">
							<input type="radio" name="paypal_payment_method" id="paypal_payment_wpp" value='<?php echo $_smarty_tpl->tpl_vars['PayPal_HSS']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['PayPal_payment_method']->value==$_smarty_tpl->tpl_vars['PayPal_HSS']->value) {?>checked="checked"<?php }?> />
							<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['choose'];?>
 <?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['website_payment_pro'];?>
<br />
							<span class="description"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['website_payment_pro_tagline'];?>
</span>
							<p class="toolbox"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['website_payment_pro_disclaimer'];?>
</p>
						</label>
					<?php }?>
				</div>
			<?php }?>

			<?php if ((in_array($_smarty_tpl->tpl_vars['PayPal_ECS']->value,$_smarty_tpl->tpl_vars['PayPal_allowed_methods']->value))) {?>
			<h4 class="inline"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['additional_solution_tagline'];?>
</h4> <img src="<?php echo $_smarty_tpl->tpl_vars['PayPal_logo']->value['LocalPayPalMarkSmall'];?>
" />
			<div class="form-block">
				
				<label for="paypal_payment_ecs">
					<input type="radio" name="paypal_payment_method" id="paypal_payment_ecs" value='<?php echo $_smarty_tpl->tpl_vars['PayPal_ECS']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['PayPal_payment_method']->value==$_smarty_tpl->tpl_vars['PayPal_ECS']->value) {?>checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['choose'];?>
 <?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['express_checkout'];?>
<br />
					<span class="description"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['express_checkout_tagline'];?>
</span>
				</label>
			</div>
			<?php }?>

			<hr />
		</div>

		
		
		

		
		<div class="box" id="account">

			<span class="paypal-section">2</span> <h3 class="inline"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['account_section_title'];?>
</h3>

			<br /><br />

			<div id="signup">
				
				<a href="<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u1']->signUpRedirectLink;?>
" target="_blank" class="paypal-button paypal-signup-button" id="paypal-signup-button-u1"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u1']->signUpCallButton;?>
</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u2']->signUpRedirectLink;?>
" target="_blank" class="paypal-button paypal-signup-button" id="paypal-signup-button-u2"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u2']->signUpCallButton;?>
</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u3']->signUpRedirectLink;?>
" target="_blank" class="paypal-button paypal-signup-button" id="paypal-signup-button-u3"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u3']->signUpCallButton;?>
</a>

				
				
				<a href="<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u5']->signUpRedirectLink;?>
#" target="_blank" class="paypal-button paypal-signup-button" id="paypal-signup-button-u5"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u5']->signUpCallButton;?>
</a>
				

				<br /><br />

				
				<span class="paypal-signup-content" id="paypal-signup-content-u1"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u1']->content;?>
</span>
				<span class="paypal-signup-content" id="paypal-signup-content-u2"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u2']->content;?>
</span>
				<span class="paypal-signup-content" id="paypal-signup-content-u3"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u3']->content;?>
</span>

				
				<span class="paypal-signup-content" id="paypal-signup-content-u4"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u4']->content;?>
</span>
				<span class="paypal-signup-content" id="paypal-signup-content-u5"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u5']->content;?>
</span>
				<span class="paypal-signup-content" id="paypal-signup-content-u6"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u6']->content;?>
</span>

			</div>

			<hr />

		</div>

		
		<div class="box disabled" id="credentials">
			<span class="paypal-section">3</span> <h3 class="inline"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_section_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h3>

			<br /><br />

			<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_tagline'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>


			<div class="paypal-hide" id="configuration">
				

				<div id="standard-credentials">
					<h4><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h4>

					<br />

					<a href="#" class="paypal-button" id="paypal-get-identification">
					<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_button'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<p class="toolbox"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_button_disclaimer'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
					</a>

					<br /><br />

					<dl>
						<dt><label for="api_username"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_username'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 : </label></dt>
						<dd><input type='text' name="api_username" id="api_username" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_api_username']->value, ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" size="85"/></dd>
						<dt><label for="api_password"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_password'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 : </label></dt>
						<dd><input type='password' size="85" name="api_password" id="api_password" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_api_password']->value, ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" /></dd>
						<dt><label for="api_signature"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_signature'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 : </label></dt>
						<dd><input type='text' size="85" name="api_signature" id="api_signature" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_api_signature']->value, ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" /></dd>
					</dl>
					<div class="clear"></div>
					<span class="description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_fields_disclaimer'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
				</div>


				<div id="integral-credentials" class="paypal-hide">
					<h4><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_integral_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h4>

					<br />

					<dl>
						<dt><label for="api_business_account"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_business_email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 : </label></dt>
						<dd><input type='text' name="api_business_account" id="api_business_account" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_api_business_account']->value, ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" /></dd>
					</dl>
				</div>

				<div class="clear"></div>

				<h4><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['setup_finalize_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 : </h4>
				<p><span class="bold">1.</span> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['setup_reminder_1'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
				<p><span class="bold">2.</span> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['setup_reminder_2'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>

				<h4><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['configuration_options_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h4>
				<div id="integral_evolution_solution" class="paypal-hide">
					<p class="description">
						<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['integral_evolution_solution'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

					</p>
					<input type="radio" name="integral_evolution_solution" id="integral_evolution_solution_iframe" value="1" <?php if ($_smarty_tpl->tpl_vars['PayPal_integral_evolution_solution']->value==1) {?>checked="checked"<?php }?> /> <label for="integral_evolution_solution_iframe"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['integral_evolution_solution_iframe'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label><br />
					<input type="radio" name="integral_evolution_solution" id="integral_evolution_solution_no_iframe" value="0" <?php if ($_smarty_tpl->tpl_vars['PayPal_integral_evolution_solution']->value==0) {?>checked="checked"<?php }?> /> <label for="integral_evolution_solution_no_iframe"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['integral_evolution_solution_no_iframe'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label><br/>
					<div id="integral_evolution_template">
						<p class="description">
						<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['template_to_choose'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

						</p>
						<img src="../modules/paypal/views/img/template.png" alt=""><br/>
						<input type="radio" name="integral_evolution_template" id="integral_evolution_template_A" value="A" <?php if ($_smarty_tpl->tpl_vars['PayPal_integral_evolution_template']->value=="A") {?>checked="checked"<?php }?>  style="margin-left:60px"/> <label for="integral_evolution_template">A</label> &nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="integral_evolution_template" id="integral_evolution_template_B" value="B" <?php if ($_smarty_tpl->tpl_vars['PayPal_integral_evolution_template']->value=="B") {?>checked="checked"<?php }?> style="margin-left:80px"/> <label for="integral_evolution_template">B</label>&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="integral_evolution_template" id="integral_evolution_template_C" value="C" <?php if ($_smarty_tpl->tpl_vars['PayPal_integral_evolution_template']->value=="C") {?>checked="checked"<?php }?> style="margin-left:70px" /> <label for="integral_evolution_template">C</label>&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
					
					
				</div>

				<div id="express_checkout_shortcut" class="paypal-hide">
					<p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['express_checkout_shortcut_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
					<p class="description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['express_checkout_shortcut_tagline'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
					<input type="radio" name="express_checkout_shortcut" id="paypal_payment_ecs_no_shortcut" value="1" <?php if ($_smarty_tpl->tpl_vars['PayPal_express_checkout_shortcut']->value==1) {?>checked="checked"<?php }?> /> <label for="paypal_payment_ecs_no_shortcut"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['yes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_recommended'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label><br />
					<input type="radio" name="express_checkout_shortcut" id="paypal_payment_ecs_shortcut" value="0" <?php if ($_smarty_tpl->tpl_vars['PayPal_express_checkout_shortcut']->value==0) {?>checked="checked"<?php }?> /> <label for="paypal_payment_ecs_shortcut"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['no'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>
				</div>

				<div id="in_context_checkout" class="paypal-hide">
					<p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['in_context_checkout_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
					<p class="description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['in_context_checkout_tagline'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
					<input type="radio" name="in_context_checkout" id="paypal_payment_ecs_no_in_context_checkout" value="1" <?php if ($_smarty_tpl->tpl_vars['PayPal_in_context_checkout']->value==1) {?>checked="checked"<?php }?> /> <label for="paypal_payment_ecs_no_in_context_checkout"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['yes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label><br />
					<input type="radio" name="in_context_checkout" id="paypal_payment_ecs_in_context_checkout" value="0" <?php if ($_smarty_tpl->tpl_vars['PayPal_in_context_checkout']->value==0) {?>checked="checked"<?php }?> /> <label for="paypal_payment_ecs_in_context_checkout"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['no'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>
					<p class="merchant_id">
						<label><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['in_context_checkout_merchant_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>
						<input type="text" name="in_context_checkout_merchant_id" id="in_context_checkout_merchant_id" value="<?php if (isset($_smarty_tpl->tpl_vars['PayPal_in_context_checkout_merchant_id']->value)&&$_smarty_tpl->tpl_vars['PayPal_in_context_checkout_merchant_id']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['PayPal_in_context_checkout_merchant_id']->value;?>
<?php }?>" />
					</p>
				</div>

				<div>
					<p><?php echo smartyTranslate(array('s'=>'Use the PayPal Login functionnality','mod'=>'paypal'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['default_lang_iso']->value=='fr') {?><?php echo smartyTranslate(array('s'=>'(*see the ','mod'=>'paypal'),$_smarty_tpl);?>
 <a href="http://altfarm.mediaplex.com/ad/ck/3484-197941-8030-96"> <?php echo smartyTranslate(array('s'=>'integration guide','mod'=>'paypal'),$_smarty_tpl);?>
 </a> <?php echo smartyTranslate(array('s'=>'and follow the steps','mod'=>'paypal'),$_smarty_tpl);?>
)<?php } else { ?><?php echo smartyTranslate(array('s'=>'(*see the ','mod'=>'paypal'),$_smarty_tpl);?>
 <a href="http://altfarm.mediaplex.com/ad/ck/3484-197941-8030-170"> <?php echo smartyTranslate(array('s'=>'integration guide','mod'=>'paypal'),$_smarty_tpl);?>
 </a> <?php echo smartyTranslate(array('s'=>'and follow the steps','mod'=>'paypal'),$_smarty_tpl);?>
)<?php }?></p>
					<p class="description">
						<?php echo smartyTranslate(array('s'=>'This function allows to your clients to connect with their PayPal credentials to shorten the check out','mod'=>'paypal'),$_smarty_tpl);?>

					</p>
					<div id="paypal_login_yes_or_no" class="">
						<p class="description"></p>
						<input type="radio" name="paypal_login" id="paypal_login_yes" value="1" <?php if ($_smarty_tpl->tpl_vars['PayPal_login']->value==1) {?>checked="checked"<?php }?> /> <label for="paypal_login_yes"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'paypal'),$_smarty_tpl);?>
 </label><br />
						<input type="radio" name="paypal_login" id="paypal_login_no" value="0" <?php if ($_smarty_tpl->tpl_vars['PayPal_login']->value==0) {?>checked="checked"<?php }?> /> <label for="paypal_login_no"><?php echo smartyTranslate(array('s'=>'No','mod'=>'paypal'),$_smarty_tpl);?>
</label>
					</div>
					<div id="paypal_login_configuration"<?php if ($_smarty_tpl->tpl_vars['PayPal_login']->value==0) {?> style="display: none;"<?php }?>>
						<p>
							<?php echo smartyTranslate(array('s'=>'Fill in the informations of your PayPal account','mod'=>'paypal'),$_smarty_tpl);?>
.<?php if ($_smarty_tpl->tpl_vars['default_lang_iso']->value=='fr') {?>(* <?php echo smartyTranslate(array('s'=>'See','mod'=>'paypal'),$_smarty_tpl);?>
 <a href="http://altfarm.mediaplex.com/ad/ck/3484-197941-8030-96"><?php echo smartyTranslate(array('s'=>'Integration Guide','mod'=>'paypal'),$_smarty_tpl);?>
</a>)<?php }?>.
						</p>
						<dl>
							<dt>
								<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['client_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

							</dt>
							<dd>
								<input type="text" name="paypal_login_client_id" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_login_client_id']->value;?>
" autocomplete="off" size="85">
							</dd>
							<dt>
								<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['secret'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

							</dt>
							<dd>
								<input type="text" name="paypal_login_client_secret" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_login_secret']->value;?>
" autocomplete="off" size="85">
							</dd>
							
							<dt>
								<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['template_to_choose'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

								<p class="description" style="margin-top:-10px;">(<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['translated_in_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
)</p>
							</dt>
							<dd>
								<input type="radio" name="paypal_login_client_template" id="paypal_login_client_template_paypal_blue" value="1"<?php if ($_smarty_tpl->tpl_vars['PayPal_login_tpl']->value==1) {?> checked<?php }?> />
								<label for="paypal_login_client_template_paypal_blue">
									<img src="../modules/paypal/views/img/paypal_login_blue.png" alt=""> 
								</label>
								<br />
								<input type="radio" name="paypal_login_client_template" id="paypal_login_client_template_neutral" value="2"<?php if ($_smarty_tpl->tpl_vars['PayPal_login_tpl']->value==2) {?> checked<?php }?> />
								<label for="paypal_login_client_template_neutral">
									<img src="../modules/paypal/views/img/paypal_login_grey.png" alt=""> 
								</label>
							</dd>
						</dl>
						
						
						<div class="clear"></div>
					</div>
				</div>


				<p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
				<p class="description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_tagline'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_learn_more_link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_learn_more'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></p>
				<input type="radio" name="sandbox_mode" id="paypal_payment_live_mode" value="0" <?php if ($_smarty_tpl->tpl_vars['PayPal_sandbox_mode']->value==0) {?>checked="checked"<?php }?> /> <label for="paypal_payment_live_mode"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_live_mode'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label><br />
				<input type="radio" name="sandbox_mode" id="paypal_payment_test_mode" value="1" <?php if ($_smarty_tpl->tpl_vars['PayPal_sandbox_mode']->value==1) {?>checked="checked"<?php }?> /> <label for="paypal_payment_test_mode"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_test_mode'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>

				<br />

				<p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['payment_type_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
				<p class="description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['payment_type_tagline'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
				<input type="radio" name="payment_capture" id="paypal_direct_sale" value="0" <?php if ($_smarty_tpl->tpl_vars['PayPal_payment_capture']->value==0) {?>checked="checked"<?php }?> /> <label for="paypal_direct_sale"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['payment_type_direct'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label><br />
				<input type="radio" name="payment_capture" id="paypal_manual_capture" value="1" <?php if ($_smarty_tpl->tpl_vars['PayPal_payment_capture']->value==1) {?>checked="checked"<?php }?> /> <label for="paypal_manual_capture"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['payment_type_manual'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>

				<br /><br />
			</div>

			<input type="hidden" name="submitPaypal" value="paypal_configuration" />
			<input type="submit" name="submitButton" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['save_button'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" id="paypal_submit" />
			
			<div class="box paypal-hide" id="paypal-test-mode-confirmation">
				<h3><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_confirmation_title'];?>
 :</h3>
				<ul>
					<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_confirmation_content'];?>

				</ul>

				<h4><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_confirmation_question'];?>
</h4>

				<div id="buttons">
					<button class="fancy_confirm" name="fancy_confirm" value="0"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['no'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</button>
					<button class="fancy_confirm" name="fancy_confirm" value="1"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['yes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</button>
				</div>
			</div>

			<?php if (isset($_smarty_tpl->tpl_vars['PayPal_save_success']->value)) {?>
			<div class="box paypal-hide" id="paypal-save-success">
				<h3><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['congratulation_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h3>
				<?php if ($_smarty_tpl->tpl_vars['PayPal_sandbox_mode']->value==0) {?>
				<p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['congratulation_live_mode'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
				<?php } elseif ($_smarty_tpl->tpl_vars['PayPal_sandbox_mode']->value==1) {?>
				<p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['congratulation_test_mode'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
				<?php }?>
			</div>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['PayPal_save_failure']->value)) {?>
			<div class="box paypal-hide" id="paypal-save-failure">
				<h3><?php echo smartyTranslate(array('s'=>'Error !','mod'=>'paypal'),$_smarty_tpl);?>
</h3>
				<p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['error_message'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
			</div>
			<?php }?>

			<div class="box paypal-hide" id="js-paypal-save-failure">
				<h3><?php echo smartyTranslate(array('s'=>'Error !','mod'=>'paypal'),$_smarty_tpl);?>
</h3>
				<p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['error_message'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
			</div>

			<hr />
		</div>
	</form>

	<div class="box">
		<p class="description">
			<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['express_checkout_tagline_source'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

		</p>
	</div>

</div>
<?php }} ?>
