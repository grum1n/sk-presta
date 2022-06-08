<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class StickyCategories extends Module
{
    public function __construct()
    {
        $this->name = 'stickyCategories';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Solidus Kodas';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.6',
            'max' => '1.7.99',
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Sticky Categories');
        $this->description = $this->l('Description of my Sticky Categories module.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('MYMODULE_NAME')) {
            $this->warning = $this->l('No name provided');
        }
    }
    public function install()
    {
        return parent::install() && $this->registerHook('displayHome');
    }
    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayHome()
    {
//        return 'This is the sticky categories module';
        return $this->display(__FILE__, 'views/templates/hook/home.tpl');
    }
}