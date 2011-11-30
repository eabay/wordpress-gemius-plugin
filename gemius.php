<?php
/*
   Plugin Name: Gemius
   Plugin URI: http://hwmnetwork.com
   Description: Gemius script code addition
   Author: Erhan Abay
   Version: 2.0
   Author URI: http://hwmnetwork.com
*/

require_once 'settings.php';

add_action('wp_head', function() {
    $settings = get_option('gemius_options');
    
    if (!$settings) {
        return;
    }
    
    $identifier = is_home() ? $settings['identifier_homepage'] : $settings['identifier_others']; 
    
    printf("
<script type=\"text/javascript\">
var pp_gemius_identifier = new String('%s');
document.write('<script src=\"%s\"><\/script>');
</script>
    ", $identifier, plugins_url('js/xgemius.js' , __FILE__)
);
});