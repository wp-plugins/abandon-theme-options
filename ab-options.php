<div class="wrap">
	<div id="icon-ab-custom" class="icon32"></div>
    <h2>Custom Theme Options</h2>
    <br class="clear">
    
	<div class="postbox-container" style="width: 69%;">
		<form method="post" action="options.php" enctype="multipart/form-data">
			<?php wp_nonce_field('update-options'); ?>
			<?php settings_fields('ab_custom_options'); ?>
			<?php do_settings_sections(__FILE__); ?>
			
			<?php $main_options->print_settings(); ?>
			<?php foreach($groups as $group): $group->print_settings(); endforeach; ?>
						
			<table class="form-table">
				<tr valign="top">
					<td>
						<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Update Options') ?>" /></p>
					</td>
				</tr>
			</table>
		</form>
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