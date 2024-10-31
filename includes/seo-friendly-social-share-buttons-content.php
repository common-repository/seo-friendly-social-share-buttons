<?php

function sfssb_social_sharing_buttons($content) {
	global $post;
    global $ssbic_options;
	if(is_singular() && $ssbic_options['enable']) {
        
        if(is_page() && $ssbic_options['show_in_page']==0){
            
           return $content;
        }
		// Get current page URL 
		$sfssbURL = urlencode(get_permalink());
 
		// Get current page title
		$sfssbTitle = str_replace( ' ', '%20', get_the_title());
		
		// Get Post Thumbnail for pinterest
		$sfssbThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
 
		// Construct sharing URL without using any script
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$sfssbTitle.'&amp;url='.$sfssbURL.'&amp;via=moedergaia';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$sfssbURL;
		$googleURL = 'https://plus.google.com/share?url='.$sfssbURL;
		$bufferURL = 'https://bufferapp.com/add?url='.$sfssbURL.'&amp;text='.$sfssbTitle;
		$whatsappURL = 'whatsapp://send?text='.$sfssbTitle . ' ' . $sfssbURL;
		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$sfssbURL.'&amp;title='.$sfssbTitle;
 
		// Based on popular demand added Pinterest too
		$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sfssbURL.'&amp;media='.$sfssbThumbnail[0].'&amp;description='.$sfssbTitle;
        $pinterestImage = plugins_url('/images/pinterest45x45.png', SSBIC_PLUGIN_URL);
        $twitterImage = plugins_url('/images/twitter45x45.png', SSBIC_PLUGIN_URL);
        $facebookImage = plugins_url('/images/facebook45x45.png', SSBIC_PLUGIN_URL);
        $bufferImage = plugins_url('/images/buffer45x45.png', SSBIC_PLUGIN_URL);
        $linkedinImage = plugins_url('/images/linkedin45x45.png', SSBIC_PLUGIN_URL);
        $googleplusImage = plugins_url('/images/googleplus45x45.png', SSBIC_PLUGIN_URL);
        $whatsappImage = plugins_url('/images/whatsapp45x45.png', SSBIC_PLUGIN_URL);
        
		// Add sharing button at the end of page/page content
		
		$ssbici  = '<div class="sfssb">';
        $ssbici .= '<h5>'.$ssbic_options['ShareText'].'</h5>';
        if ($ssbic_options['twitter_url']==1) {
		$ssbici .= '<a class="sfssb-link sfssb-twitter" href="'. $twitterURL .'" target="_blank"><img src="'.$twitterImage.'" border="0" /></a>';
            }
       if ($ssbic_options['facebook_url']==1) {
        
		$ssbici .= '<a class="sfssb-link sfssb-facebook" href="'.$facebookURL.'" target="_blank"><img src="'.$facebookImage.'" border="0" /></a>';}
        
       if ($ssbic_options['whatsapp_url']==1) {
		$ssbici .= '<a class="sfssb-link sfssb-whatsapp" href="'.$whatsappURL.'" target="_blank"><img src="'.$whatsappImage.'" border="0" /></a>';}
        
      if ($ssbic_options['google_url']==1) {
		$ssbici .= '<a class="sfssb-link sfssb-googleplus" href="'.$googleURL.'" target="_blank"><img src="'.$googleplusImage.'" border="0" /></a>';}
           
          if ($ssbic_options['buffer_url']==1) {
               
		$ssbici .= '<a class="sfssb-link sfssb-buffer" href="'.$bufferURL.'" target="_blank"><img src="'.$bufferImage.'" border="0" /></a>';}
            if ($ssbic_options['linkedin_url']==1) {
		$ssbici .= '<a class="sfssb-link sfssb-linkedin" href="'.$linkedInURL.'" target="_blank"><img src="'.$linkedinImage.'" border="0" /></a>';}
                 if ($ssbic_options['pinterest_url']==1) {
		$ssbici .= '<a class="sfssb-link sfssb-pinterest" href="'.$pinterestURL.'" data-pin-custom="true" target="_blank"><img src="'.$pinterestImage.'" border="0" /></a>';
                   }
		$ssbici .= '</div>';
		 if ($ssbic_options['show_in_head']==1 && $ssbic_options['show_in_footer']==1 ){
        //return  $ssbici . $content ;
        return $ssbici . $content . $ssbici;
    }
         elseif ($ssbic_options['show_in_head']==1 && $ssbic_options['show_in_footer']==0 ){
        //return  $ssbici . $content ;
        return $ssbici . $content;
    }
        elseif ($ssbic_options['show_in_head']==0 && $ssbic_options['show_in_footer']==1 ){
		return $content . $ssbici ;
	
   }
    
     elseif ($ssbic_options['show_in_head']==0 && $ssbic_options['show_in_footer']==0 )
		return $content . $ssbici ;}
   
      
    
    else{
		// if not a post/page then don't include sharing button
		return $content;	
}}add_filter('the_content', 'sfssb_social_sharing_buttons');