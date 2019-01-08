<?php
namespace common\components;

class ThemeManager extends PackageManager
{

    public $paths = ['@frontend/themes'];

    public $namespace = 'frontend\\themes\\';

    public $infoClass = 'Theme';

    public function getThemePath()
    {
        return  $this->paths[0];
    }

    public function getDefaultTheme()
    {
        return \Yii::$app->config->get('theme_name');
    }

    public function setDefaultTheme($id)
    {
       return \Yii::$app->config->set('theme_name', $id);
    }
}