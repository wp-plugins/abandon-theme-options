<div class="wrap">
	<div id="icon-ab-custom" class="icon32"></div>
    <h2>Custom Theme Options</h2>
    <br class="clear">
    <div class="postbox-container" style="width: 69%;">
	    <div id="poststuff">
	        <div id="aio-favicon-settings" class="postbox">
	            <h3 id="settings"><?php _e('Settings', AIOFAVICON_TEXTDOMAIN); ?></h3>
	            <div class="inside">
				    <?php if(isset($ab_options_set)): ?>
						<form method="post" action="options.php" enctype="multipart/form-data">
							<?php wp_nonce_field('update-options'); ?>
							<?php settings_fields('ab_custom_options'); ?>
							<?php do_settings_sections(__FILE__); ?>
							<table class="form-table">
								<?php if(isset($ab_options_set['template_styles'])): $styles=$ab_options_set['template_styles']; ?>
									<tr valign="top">
										<th scope="row">Theme Colour:</th>
										<td>
											<?php $op = get_option('ab_template_styles'); ?>
											<select name="ab_template_styles">
												<?php foreach($styles as $key=>$style): ?>
													<option <?php if($op==$key){ echo 'selected="selected"';} ?> value="<?php echo $key; ?>"><?php echo $style; ?></option>
												<?php endforeach; ?>
											</select>
										</td>
									</tr>
								<?php endif; ?>
								<?php if(isset($ab_options_set['layout'])): $layouts=$ab_options_set['layout']; ?>
									<tr valign="top">
										<th scope="row">Layout Options:</th>
										<td>
											<?php $op = get_option('ab_layout'); ?>
											<select name="ab_layout">
												<?php foreach($layouts as $key=>$layout): ?>
													<option <?php if($op==$key){ echo 'selected="selected"';} ?> value="<?php echo $key; ?>"><?php echo $layout; ?></option>
												<?php endforeach; ?>
											</select>
										</td>
									</tr>
								<?php endif; ?>
								<?php if(isset($ab_options_set['logo'])): ?>
									<tr valign="top">
										<th scope="row">Upload Logo:</th>
										<td>
											<label for="ab_logo">
												<input id="ab_logo" type="text" size="36" name="ab_logo" value="<?php echo get_option('ab_logo'); ?>" />
												<input id="ab_logo_button" class="button" type="button" value="Upload Logo" />
												<br />
												<span class="description">Enter an URL or upload an image for your logo.</span>
											</label>
										</td>
									</tr>
								<?php endif; ?>
								<?php if(isset($ab_options_set['favicon'])): ?>
									<tr valign="top">
										<th scope="row">Upload Favicon:</th>
										<td>
											<label for="ab_favicon">
												<input id="ab_favicon" type="text" size="36" name="ab_favicon" value="<?php echo get_option('ab_favicon'); ?>" />
												<input id="ab_favicon_button" class="button" type="button" value="Upload Favicon" />
												<br />
												<span class="description">Enter an URL or upload an image for the favicon. Make sure it's 16x16px.</span>
											</label>
										</td>
									</tr>
								<?php endif; ?>
								<?php if(isset($ab_options_set['apple_icon'])): ?>
									<tr valign="top">
										<th scope="row">Upload Apple Touch Icon:</th>
										<td>
											<label for="ab_apple_icon">
												<input id="ab_apple_icon" type="text" size="36" name="ab_apple_icon" value="<?php echo get_option('ab_apple_icon'); ?>" />
												<input id="ab_apple_icon_button" class="button" type="button" value="Upload Apple Icon" />
												<br />
												<span class="description">Enter an URL or upload an image for your logo.</span>
											</label>
										</td>
									</tr>
								<?php endif; ?>
								<?php if(isset($ab_options_set['checkboxes'])): foreach($ab_options_set['checkboxes'] as $key=>$cb): ?>
									<?php $name='ab_'.$key; ?>
									<tr valign="top">
										<th scope="row"><?php echo $cb; ?>:</th>
										<td>
											<input <?php if(get_option($name)){ echo 'checked="checked"';} ?> type="checkbox" name="<?php echo $name; ?>" value="1" /> <span class="description">Yes please!</span>
										</td>
									</tr>
								<?php endforeach; endif; ?>
								<?php if(isset($ab_options_set['inputs'])): foreach($ab_options_set['inputs'] as $key=>$cb): ?>
									<?php $name='ab_'.$key; ?>
									<tr valign="top">
										<th scope="row"><?php echo $cb; ?>:</th>
										<td>
											<input type="text" name="<?php echo $name; ?>" value="<?php echo get_option($name); ?>" class="regular-text" />
										</td>
									</tr>
								<?php endforeach; endif; ?>
								<?php if(isset($ab_options_set['textareas'])): foreach($ab_options_set['textareas'] as $key=>$cb): ?>
									<?php $name='ab_'.$key; ?>
									<tr valign="top">
										<th scope="row"><?php echo $cb; ?>:</th>
										<td>
											<textarea class="ab_textarea" name="<?php echo $name; ?>"><?php echo get_option($name); ?></textarea>
										</td>
									</tr>
								<?php endforeach; endif; ?>
								<?php if(isset($ab_options_set['tracking'])): ?>
									<tr valign="top">
										<th scope="row">Tracking Code:</th>
										<td>
											<textarea id="tracking_code" name="ab_tracking"><?php echo get_option('ab_tracking'); ?></textarea>
											<div class="clear"></div>
											<span class="description">Paste your whole your Google Analytics code here (including script tags) so you can track visitors to your site.</span>
										</td>
									</tr>
								<?php endif; ?>
								<tr valign="top">
									<th scope="row">&nbsp;</th>
									<td>
										<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
									</td>
								</tr>
							</table>
						</form>
					<?php else: ?>
						<p>This is a plugin for custom options aimed at theme designers. To get it to work you need to set them up in your themes functions.php file.</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<?php if(!isset($ab_options_set['remove_donation'])): ?>
		<div class="postbox-container" style="width: 29%;">
			<div id="poststuff">
		        <div class="postbox">
		            <h3 id="donate">Donate</h3>
		            <div class="inside">
		                <p>This plugin was created and is maintained for free by <a href="http://abandon.ie">Abban Dunne</a>. If you would like to show your support and make a contribution towards future development please consider making a donation.</p>
		                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHLwYJKoZIhvcNAQcEoIIHIDCCBxwCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYBJ1vwTYhBBANZQOSzVlzcJOSRDS3xZG3x7zgIkCqHjQPS+gH1Z7jWlwR+XEjWW5d50uMLz2EoAB85CHMiFtRvcjRMUHGUgSifMgzX5SmQFBfuMgidpbZGpr7MXXA3Sqa+/8XZwTNiCmlPMrGcRr9Y1/34bMmLCKrMtMO/BbYXqOzELMAkGBSsOAwIaBQAwgawGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQI2Wmq+I3isKmAgYiD7a4HZX1Pm6MjYh3lCFRiXPyNS2zoh+33RNXkFhvmAORBTUq9v0H/GXH0ifC2a9foKEyJrmpnaREarHAMm7kirEYU8pBEHpEUG5f0LhG0Qodn9yHbay0yHSnAEdcbqtylHZNu7+Ij91wjAHFzTWYwSFOZBNA9Sn9wgHyayeJzzSeu4cTwdVIPoIIDhzCCA4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1mSUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb22CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3YCDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GEYj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMTEwNzExMjExMzU5WjAjBgkqhkiG9w0BCQQxFgQUXnwfEHYiFGKxJYgPXclruwyZUu8wDQYJKoZIhvcNAQEBBQAEgYCpk9sOQ4LH0KvPX94xjqP8vzVKzKhDRomtczQRmb9OaceGql7xPTy4rglg77MKvdmGphHxUsNvKvFIJsO9S06SRUmm7hJ7ApU0GaIC8BWIcQvBrLJQ+EXQLQjkaX2jef/ZOdVj0SP72OYrPEuCrstYyeWO+f85coGHzUfBnTT+QA==-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
		            </div>
		        </div>
		    </div>
		</div>
	<?php endif; ?>
</div>