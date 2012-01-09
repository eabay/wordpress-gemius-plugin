<?php

namespace Gemius\Plugins;

use Hwm\WordPress\Settings\SettingsPage;
use Hwm\WordPress\Settings\Section;
use Hwm\WordPress\Settings\Field\TextField;

/** @Plugin */
class CodePlugin
{
    const OPTIONS_KEY = 'gemius_options';
    
    protected $pluginPath;
    
    public function __construct($pluginPath)
    {
        $this->pluginPath = $pluginPath;
    }
    
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
    public function addScript($param)
    {
        $settings = get_option(self::OPTIONS_KEY);
        
        if (!$settings) {
            return;
        }
        
        $identifier = is_home() ? $settings['identifier_homepage'] : $settings['identifier_others']; 
        
        printf('<script type="text/javascript">var pp_gemius_identifier = new String(\'%s\');document.write(\'<script src="%s"><\/script>\');</script>', $identifier, plugins_url('assets/js/xgemius.js', $this->pluginPath));
    }
}