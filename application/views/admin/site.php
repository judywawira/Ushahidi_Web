<?php 
/**
 * Site view page.
 *
 * PHP version 5
 * LICENSE: This source file is subject to LGPL license 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html
 * @author     Ushahidi Team <team@ushahidi.com> 
 * @package    Ushahidi - http://source.ushahididev.com
 * @module     API Controller
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL) 
 */
?>
			<div class="bg">
				<h2><?php echo $title; ?> 
					<a href="<?php echo url::base() . 'admin/settings/site' . '" class="active">' . Kohana::lang('ui_main.site') . '</a>' ?>
					<a href="<?php echo url::base() . 'admin/settings' . '">' . Kohana::lang('ui_main.map') . '</a>' ?>
					<a href="<?php echo url::base() . 'admin/settings/sms' . '">' . Kohana::lang('ui_main.sms') . '</a>' ?>
					<a href="<?php echo url::base() . 'admin/settings/sharing' . '">' . Kohana::lang('ui_main.sharing') . '</a>' ?>
					<a href="<?php echo url::base() . 'admin/settings/email' . '">' . Kohana::lang('ui_main.email') . '</a>' ?>
					<a href="<?php echo url::base() . 'admin/settings/themes' . '">' . Kohana::lang('ui_main.themes') . '</a>' ?>
				</h2>
				<?php print form::open(); ?>
				<div class="report-form">
					<?php
					if ($form_error) {
					?>
						<!-- red-box -->
						<div class="red-box">
							<h3><?php echo Kohana::lang('ui_main.error');?></h3>
							<ul>
							<?php
							foreach ($errors as $error_item => $error_description)
							{
								print (!$error_description) ? '' : "<li>" . $error_description . "</li>";
							}
							?>
							</ul>
						</div>
					<?php
					}

					if ($form_saved) {
					?>
						<!-- green-box -->
						<div class="green-box">
							<h3><?php echo Kohana::lang('ui_main.configuration_saved');?></h3>
						</div>
					<?php
					}
					?>				
					<div class="head">
						<h3><?php echo Kohana::lang('settings.site.title');?></h3>
						<input type="image" src="<?php echo url::base() ?>media/img/admin/btn-cancel.gif" class="cancel-btn" />
						<input type="image" src="<?php echo url::base() ?>media/img/admin/btn-save-settings.gif" class="save-rep-btn" />
					</div>
					<!-- column -->		
					<div class="sms_holder">
						<div class="row">
							<h4><a href="#" class="tooltip" title="<?php echo Kohana::lang("tooltips.settings_site_name"); ?>"><?php echo Kohana::lang('settings.site.name');?></a></h4>
							<?php print form::input('site_name', $form['site_name'], ' class="text long2"'); ?>
						</div>
						<div class="row">
							<h4><a href="#" class="tooltip" title="<?php echo Kohana::lang("tooltips.settings_site_tagline"); ?>"><?php echo Kohana::lang('settings.site.tagline');?></a></h4>
							<?php print form::input('site_tagline', $form['site_tagline'], ' class="text long2"'); ?>
						</div>
						<div class="row">
							<h4><a href="#" class="tooltip" title="<?php echo Kohana::lang("tooltips.settings_site_email"); ?>"><?php echo Kohana::lang('settings.site.email_site');?></a> 
							<br /><?php echo Kohana::lang('settings.site.email_notice');?></h4>
							<?php print form::input('site_email', $form['site_email'], ' class="text long2"'); ?>
						</div>
						<div class="row">
							<h4><a href="#" class="tooltip" title="<?php echo Kohana::lang("tooltips.settings_alert_email"); ?>"><?php echo Kohana::lang('settings.site.email_alerts');?></a></h4>
							<?php print form::input('alerts_email', $form['alerts_email'], ' class="text long2"'); ?>
						</div>
						<div class="row">
							<h4><a href="#" class="tooltip" title="<?php echo Kohana::lang("tooltips.settings_locale"); ?>"><?php echo Kohana::lang('settings.site.language');?></a> (Locale)</h4>
							<span class="sel-holder">
								<?php print form::dropdown('site_language', $locales_array, $form['site_language']); ?>
							</span>
						</div>
						<div class="row">
							<h4><?php echo Kohana::lang('settings.site.display_contact_page');?>?</h4>
							<?php print form::dropdown('site_contact_page', $yesno_array, $form['site_contact_page']); ?>
						</div>
						<div class="row">
							<h4><?php echo Kohana::lang('settings.site.display_howtohelp_page');?>?</h4>
							<?php print form::dropdown('site_help_page', $yesno_array, $form['site_help_page']); ?>
						</div>
						<div class="row">
							<h4><?php echo Kohana::lang('settings.site.items_per_page');?></h4>
							<span class="sel-holder">
								<?php print form::dropdown('items_per_page', $items_per_page_array, $form['items_per_page']); ?>
							</span>
						</div>
						<div class="row">
							<h4><?php echo Kohana::lang('settings.site.items_per_page_admin');?></h4>
							<span class="sel-holder">
								<?php print form::dropdown('items_per_page_admin', $items_per_page_array, $form['items_per_page_admin']); ?>
							</span>
						</div>
						<div class="row">
							<h4><?php echo Kohana::lang('settings.site.allow_reports');?>?</h4>
							<span class="sel-holder">
								<?php print form::dropdown('allow_reports', $yesno_array, $form['allow_reports']); ?>
							</span>
						</div>
						<div class="row">
							<h4><?php echo Kohana::lang('settings.site.allow_comments');?>?</h4>
							<span class="sel-holder">
								<?php print form::dropdown('allow_comments', $yesno_array, $form['allow_comments']); ?>
							</span>
						</div>
						<div class="row">
							<h4><?php echo Kohana::lang('settings.site.allow_feed');?>?</h4>
							<span class="sel-holder">
								<?php print form::dropdown('allow_feed', $yesno_array, $form['allow_feed']); ?>
							</span>
						</div>
						<div class="row">
							<h4><?php echo Kohana::lang('settings.site.share_site_stats');?>?</h4>
							<span class="sel-holder">
								<?php print form::dropdown('allow_stat_sharing', $yesno_array, $form['allow_stat_sharing']); ?>
							</span>
						</div>
						<div class="row">
							<h4><?php echo Kohana::lang('settings.site.allow_clustering');?>?</h4>
							<span class="sel-holder">
								<?php print form::dropdown('allow_clustering', $yesno_array, $form['allow_clustering']); ?>
							</span>
						</div>
						<div class="row">
							<h4><?php echo Kohana::lang('settings.site.default_category_colors');?></h4>
							<?php print form::input('default_map_all', $form['default_map_all'], ' class="text"'); ?>
							<script type="text/javascript" charset="utf-8">
								$(document).ready(function() {
									$('#default_map_all').ColorPicker({
										onSubmit: function(hsb, hex, rgb) {
											$('#default_map_all').val(hex);
										},
										onChange: function(hsb, hex, rgb) {
											$('#default_map_all').val(hex);
										},
										onBeforeShow: function () {
											$(this).ColorPickerSetColor(this.value);
										}
									})
									.bind('keyup', function(){
										$(this).ColorPickerSetColor(this.value);
									});
								});
							</script>
						</div>						
						<div class="row">
							<h4><?php echo Kohana::lang('settings.site.google_analytics');?></h4>
							<?php echo Kohana::lang('settings.site.google_analytics_example');?> &nbsp;&nbsp;
							<?php print form::input('google_analytics', $form['google_analytics'], ' class="text"'); ?>
						</div>
						<div class="row">
							<h4><?php echo Kohana::lang('settings.site.twitter_configuration');?></h4>
							<div class="row">
								<?php echo Kohana::lang('settings.site.twitter_hashtags');?>
								<?php print form::input('twitter_hashtags', $form['twitter_hashtags'], ' class="text"'); ?>
							</div>
							<div class="row" style="padding-top:5px;">
								<?php echo Kohana::lang('ui_main.username');?>
								<?php print form::input('twitter_username', $form['twitter_username'], ' class="text"'); ?>
							</div>
							<div class="row" style="padding-top:5px;">
								<?php echo Kohana::lang('ui_main.password');?>
								<?php print form::password('twitter_password', $form['twitter_password'], ' class="text"'); ?>
							</div>
						</div>
						<div class="row">
							<h4><?php echo Kohana::lang('settings.site.laconica_configuration');?></h4>

							<div class="row">
								<?php echo Kohana::lang('ui_main.username');?>
								<?php print form::input('laconica_username', $form['laconica_username'], ' class="text"'); ?>
							</div>
								<div class="row" style="padding-top:5px;">
								<?php echo Kohana::lang('ui_main.password');?>
								<?php print form::password('laconica_password', $form['laconica_password'], ' class="text"'); ?>
							</div>
								<div class="row" style="padding-top:5px;">
								<?php echo Kohana::lang('settings.site.laconica_site');?>
								<?php print form::input('laconica_site', $form['laconica_site'], 'class="text long2"'); ?>
							</div>
						</div>
						<div class="row">
							<h4><?php echo Kohana::lang('settings.site.api_akismet');?></h4>
							<?php echo Kohana::lang('settings.site.kismet_notice');?>.
							<?php print form::input('api_akismet', $form['api_akismet'], ' class="text"'); ?>
						</div>
					</div>
		
					<div class="simple_border"></div>
		
					<input type="image" src="<?php echo url::base() ?>media/img/admin/btn-save-settings.gif" class="save-rep-btn" />
					<input type="image" src="<?php echo url::base() ?>media/img/admin/btn-cancel.gif" class="cancel-btn" />
				</div>
				<?php print form::close(); ?>
			</div>
