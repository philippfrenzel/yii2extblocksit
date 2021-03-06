<?php

 /**
 * this widget allows you to include a pinterest like layout container to your site
 * @copyright Frenzel GmbH - www.frenzel.net
 * @link http://www.frenzel.net
 * @author Philipp Frenzel <philipp@frenzel.net>
 *
 */

namespace philippfrenzel\yii2extblocksit;

use Yii;
use yii\base\Model;
use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\base\Widget as Widget;

class yii2extblocksit extends Widget
{

    /**
    * @var array the HTML attributes (name-value pairs) for the field container tag.
    * The values will be HTML-encoded using [[Html::encode()]].
    * If a value is null, the corresponding attribute will not be rendered.
    */
    public $options = array();


    /**
    * @var array all attributes that be accepted by the plugin, check docs!
    */
    public $clientOptions = array(
        'numOfCol' => 5,
        'offsetX' => 5,
        'offsetY' => 5,
        'blockElement' => 'div'
    );

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        //checks for the element id
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        echo Html::beginTag('div', ['id' => $this->options['id']]); //opens the container
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo Html::endTag('div'); //closes the container, opened on init
        $this->registerPlugin();
    }

    /**
    * Registers a specific dhtmlx widget and the related events
    * @param string $name the name of the dhtmlx plugin
    */
    protected function registerPlugin()
    {
        $id = $this->options['id'];

        //get the displayed view and register the needed assets
        $view = $this->getView();
        yii2extblocksitAsset::register($view);

        $js = array();
        
        $options = Json::encode($this->clientOptions);
        $js[] = "$('#$id').BlocksIt($options);";
        
        $view->registerJs(implode("\n", $js),View::POS_READY);
    }

}
