yii2extblocksit
===============

Widget for Blocksi.js pinterest like layout container for Yii Framework 2

How to install?
---------------

Get it via [composer](http://getcomposer.org/) by adding the package to your `composer.json`:

```json
{
  "require": {
    "philippfrenzel/yii2extblocksit": "*"
  }
}
```

You may also check the package information on [packagist](https://packagist.org/packages/philippfrenzel/yii2extblocksit).

Usage
-----

```php
<?php echo \philippfrenzel\yii2extblocksit\yii2extblocksit::widget([
    'clientOptions' => [
		'numOfCol' => 5,
        'offsetX' => 5,
        'offsetY' => 5,
        'blockElement' => 'site_index'
    ]
]); ?>
```