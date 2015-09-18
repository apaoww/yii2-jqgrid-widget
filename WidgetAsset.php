<?php
/**
 * @link https://github.com/himiklab/yii2-jqgrid-widget
 * @copyright Copyright (c) 2014-2015 HimikLab
 * @license http://opensource.org/licenses/MIT MIT
 */

namespace apaoww\jqgrid;

use Yii;
use yii\web\AssetBundle;

class WidgetAsset extends AssetBundle
{
    public $sourcePath = '@vendor/apaoww/yii2-jqgrid-widget/assets';

    public $depends = [
        'yii\jui\JuiAsset',
        'apaoww\jqgrid\JqGridAsset'
    ];

    public $js =  [
        'js/export.xml.js'
    ];
}
