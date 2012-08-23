<?php

namespace Gemius;

use Oow\Settings\SettingsPage;
use Oow\Settings\Section;
use Oow\Settings\Field\TextField;

/** @Plugin */
class EmbedCodePlugin
{
    const OPTIONS_KEY = 'gemius_options';
    
    /** @Settings */
    public function settings()
    {
        $page = new SettingsPage(array(
        	'option_group' => self::OPTIONS_KEY,
        	'option_name' => self::OPTIONS_KEY,
        	'page_title' => 'Gemius Settings',
        	'menu_title' => 'Gemius',
        	'capability' => 'administrator'
        ));
        
        $page
            ->addSection(new Section('general', 'Identifiers'))
        	->addField(new TextField('identifier_homepage', 'Identifier for homepage'))
        	->addField(new TextField('identifier_others', 'Identifier for other pages'))
        ;
        
        return $page;
    }
    
    /** @Action(tag="wp_head") */
    public function addScript()
    {
        $settings = get_option(self::OPTIONS_KEY);
        
        if (!$settings) {
            return;
        }
        
        $identifier = is_home() ? $settings['identifier_homepage'] : $settings['identifier_others'];
        
        if (empty($identifier)) {
        	return;
        }
        
        printf('<script type="text/javascript">var pp_gemius_identifier = new String(\'%s\');</script>', $identifier);
    	
    	$script = realpath(__DIR__.'/../../assets/js/xgemius.js');
    	
    	wp_enqueue_script(self::OPTIONS_KEY, str_replace(ABSPATH, '/', $script), null, filemtime($script));
    }
}