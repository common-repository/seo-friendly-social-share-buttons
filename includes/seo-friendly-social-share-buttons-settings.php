<?php
// Create Menu Link
function ssbic_options_menu_link(){
	add_options_page(
	'SEO Friendly Social Share Buttons Options', 'SEO Friendly Social Share Buttons', 'manage_options', 'ssbic_options', 'ssbic_options_content'	
	);
	
}

// Create Options Page Content

function ssbic_options_content(){

		 
	// Init Options Global
	global $ssbic_options;
    $ShareText = $ssbic_settings[ShareText];
ob_start(); ?>
<div class='wrap'>
<h2><?php _e('SEO Friendly Social Share Buttons Settings', 'ssbic_domain' )?></h2>
    
    
    
<p><?php _e('SEO Friendly Social Share Buttons Plugin', 'ssbic_domain' )?></p>
    
    
    
<form method='post' action=<?php echo esc_url( admin_url('options.php') ); ?>>
<?php settings_fields('ssbic_settings_group'); ?>
<table class="form-table">
<tbody>
<tr>
<th scope='row'><label for='ssbic_settings[enable]'><?php _e('Enable', 'ssbic_domain'); ?></label>
<td><input name='ssbic_settings[enable]' type="hidden" id="ssbic_settings[enable]" 
value="0" />

<input name='ssbic_settings[enable]' type="checkbox" id="ssbic_settings[enable]" 
value="1"<?php checked('1', $ssbic_options['enable']);?> />

</td>
</tr>
 
    
   
    
    
    
    
      <tr> 
<th scope='row'><label for='ssbic_settings[ShareText]'><?php _e('Text to Display', 'ssbic_domain'); ?></label>
<td><input name='ssbic_settings[ShareText]' type="hidden" id="ssbic_settings[ShareText]" value= "<?php echo $ssbic_options['ShareText'];?>"/><input type='text' id='ssbic_settings[ShareText]' size='100' placeholder='Choose your motivational sharing phrase' name='ssbic_settings[ShareText]' value= "<?php echo $ssbic_options['ShareText'];?>"/><p class="description"><?php _e('A good motivation phrase can increase shares! <br> Example: Share this with your friends!', 'ssbic_domain');?></p></td>
</tr> 
    
   <tr>
<th scope='row'><label for='ssbic_settings[facebook_url]'><?php _e('Facebook Share Button', 'ssbic_domain'); ?></label>
<td><input name='ssbic_settings[facebook_url]' type="hidden" id="ssbic_settings[facebook_url]" value="false" /><input name='ssbic_settings[facebook_url]' type="checkbox" id="ssbic_settings[facebook_url]" value="1"<?php checked('1', $ssbic_options['facebook_url']);  ?> /><p class="description"><?php _e('Allow Sharing On Facebook', 'ssbic_domain');?></p></td>
</tr> 
    
       <tr>
<th scope='row'><label for='ssbic_settings[twitter_url]'><?php _e('Twitter Share Button', 'ssbic_domain'); ?></label>
<td><input name='ssbic_settings[twitter_url]' type="hidden" id="ssbic_settings[twitter_url]" value="false" /><input name='ssbic_settings[twitter_url]' type="checkbox" id="ssbic_settings[twitter_url]" value="1"<?php checked('1', $ssbic_options['twitter_url']);  ?> /><p class="description"><?php _e('Allow Sharing On Twitter', 'ssbic_domain');?></p></td>
</tr> 
    
       <tr>
<th scope='row'><label for='ssbic_settings[google_url]'><?php _e('Google+ Share Button', 'ssbic_domain'); ?></label>
<td><input name='ssbic_settings[google_url]' type="hidden" id="ssbic_settings[google_url]" value="false" /><input name='ssbic_settings[google_url]' type="checkbox" id="ssbic_settings[google_url]" value="1"<?php checked('1', $ssbic_options['google_url']);  ?> /><p class="description"><?php _e('Allow Sharing On Google Plus', 'ssbic_domain');?></p></td>
</tr> 
    
       <tr>
<th scope='row'><label for='ssbic_settings[whatsapp_url]'><?php _e('Whatsapp Share Button', 'ssbic_domain'); ?></label>
<td><input name='ssbic_settings[whatsapp_url]' type="hidden" id="ssbic_settings[whatsapp_url]" value="false" /><input name='ssbic_settings[whatsapp_url]' type="checkbox" id="ssbic_settings[whatsapp_url]" value="1"<?php checked('1', $ssbic_options['whatsapp_url']);  ?> /><p class="description"><?php _e('Allow Sharing On Whatsapp', 'ssbic_domain');?></p></td>
</tr> 
    
       <tr>
<th scope='row'><label for='ssbic_settings[pinterest_url]'><?php _e('Pinterest Share Button', 'ssbic_domain'); ?></label>
<td><input name='ssbic_settings[pinterest_url]' type="hidden" id="ssbic_settings[pinterest_url]" value="false" /><input name='ssbic_settings[pinterest_url]' type="checkbox" id="ssbic_settings[pinterest_url]" value="1"<?php checked('1', $ssbic_options['pinterest_url']);  ?> /><p class="description"><?php _e('Allow Sharing On Pinterest', 'ssbic_domain');?></p></td>
</tr> 
    
       <tr>
<th scope='row'><label for='ssbic_settings[linkedin_url]'><?php _e('LinkedIn Share Button', 'ssbic_domain'); ?></label>
<td><input name='ssbic_settings[linkedin_url]' type="hidden" id="ssbic_settings[linkedin_url]" value="false" /><input name='ssbic_settings[linkedin_url]' type="checkbox" id="ssbic_settings[linkedin_url]" value="1"<?php checked('1', $ssbic_options['linkedin_url']);  ?> /><p class="description"><?php _e('Allow Sharing On LinkedIn', 'ssbic_domain');?></p></td>
</tr> 
    
       <tr>
<th scope='row'><label for='ssbic_settings[buffer_url]'><?php _e('Buffer Share Button', 'ssbic_domain'); ?></label>
<td><input name='ssbic_settings[buffer_url]' type="hidden" id="ssbic_settings[buffer_url]" value="false" /><input name='ssbic_settings[buffer_url]' type="checkbox" id="ssbic_settings[buffer_url]" value="1"<?php checked('1', $ssbic_options['buffer_url']);  ?> /><p class="description"><?php _e('Allow Sharing On Buffer', 'ssbic_domain');?></p></td>
</tr> 
    
    
<tr>
<th scope='row'><label for='ssbic_settings[show_in_head]'><?php _e('Show Share Buttons at the top', 'ssbic_domain'); ?></label>
<td><input name='ssbic_settings[show_in_head]' type="hidden" id="ssbic_settings[show_in_head]" value="false" /><input name='ssbic_settings[show_in_head]' type="checkbox" id="ssbic_settings[show_in_head]" value="1"<?php checked('1', $ssbic_options['show_in_head']);  ?> /><p class="description"><?php _e('Displays the Share Buttons at the top', 'ssbic_domain');?></p></td>
</tr>
<tr>
<tr>
<th scope='row'><label for='ssbic_settings[show_in_footer]'><?php _e('Show Share Buttons at the Bottom', 'ssbic_domain'); ?></label>
<td><input name='ssbic_settings[show_in_footer]' type="hidden" id="ssbic_settings[show_in_footer]" value="0" /><input name='ssbic_settings[show_in_footer]' type="checkbox" id="ssbic_settings[show_in_footer]" value="1"<?php checked('1', $ssbic_options['show_in_footer']);  ?> /><p class="description"><?php _e('Displays the Share Buttons at the bottom', 'ssbic_domain');?></p></td>
</tr>
    
    <tr>
<th scope='row'><label for='ssbic_settings[show_in_page]'><?php _e('Add Sharing Buttons To Page', 'ssbic_domain'); ?></label>
<td><input name='ssbic_settings[show_in_page]' type="hidden" id="ssbic_settings[show_in_page]" value="0" /><input name='ssbic_settings[show_in_page]' type="checkbox" id="ssbic_settings[show_in_page]" value="1"<?php checked('1', $ssbic_options['show_in_page']);  ?> /><p class="description"><?php _e('Displays the Share Buttons on each page', 'ssbic_domain');?></p></td>
</tr>
<tr>


</tbody>
</table>
<p class='submit'><input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', 'ssbic_domain');?>" /></p>
    <h3><?php _e('Help us create great software', 'ssbic_domain' )?></h3>
    <p><?php _e('We keep all our projects free to download. Free to use. <br> But we depend on the support in order to continue create new projects. <br> Thank you ', 'ssbic_domain' )?></p>
</form> 
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="A9NQR8BEGP54Q">
<input type="image" src="https://www.paypalobjects.com/en_US/BE/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</div>
<?php
if ($ssbic_options['show_in_page']==0){
    
    echo "<style>.page div.sfssb {
    display: none;
}</style>";}
 echo ob_get_clean();
}

add_action('admin_menu', 'ssbic_options_menu_link');

// Register Settings
function ssbic_register_settings(){
register_setting('ssbic_settings_group', 'ssbic_settings');	

}
add_action('admin_init', 'ssbic_register_settings');