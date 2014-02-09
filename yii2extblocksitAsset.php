<?php
/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

namespace philippfrenzel\yii2extblocksit;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class yii2extblocksitAsset extends AssetBundle
{
    public $sourcePath = '@philippfrenzel/yii2extblocksit/assets';
    public $css = array(
        'css/style.css'
    );
    public $js = array(
        'js/blocksit.js'
    );
    public $depends = array(
        'yii\web\JqueryAsset',
    );
}
