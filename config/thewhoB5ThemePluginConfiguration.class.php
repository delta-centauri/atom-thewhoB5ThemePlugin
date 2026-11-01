<?php

require_once sfConfig::get('sf_plugins_dir')
    .'/arDominionB5Plugin/config/arDominionB5PluginConfiguration.class.php';

class thewhoB5ThemePluginConfiguration extends arDominionB5PluginConfiguration
{
    public static $summary = 'The Who Schweiz Bootstrap 5 theme, extension of arDominionB5Plugin.';
    public static $version = '2.0';

    public function initialize()
    {
        parent::initialize();

        // Add this plugin templates before arDominionB5Plugin
        sfConfig::set('sf_decorator_dirs', array_merge(
            [$this->rootDir.'/templates'],
            sfConfig::get('sf_decorator_dirs')
        ));

        // Move this plugin to the top to allow overwriting
        // controllers and views from other plugin modules.
        $plugins = $this->configuration->getPlugins();
        if (false !== $key = array_search($this->name, $plugins)) {
            unset($plugins[$key]);
        }
        $this->configuration->setPlugins(array_merge([$this->name], $plugins));
    }
}
