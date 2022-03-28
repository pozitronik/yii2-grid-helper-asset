# yii2-grid-helper-assets
js hacks for yii2 grids

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Run

```
php composer.phar require pozitronik/yii2-grid-helper-asset "dev-master"
```

or add

```
"pozitronik/yii2-grid-helper-asset": "dev-master"
```

to the require section of your `composer.json` file.

Usage
-----

```php
<?php

/**
 * @var View $this
 * ...
 */
...
use yii\web\View;
use app\assets\GridHelperAsset;
use yii\helpers\Html;
use yii\web\JsExpression;
/*preferred usage with kartik grid, but it should work with default grid too*/
use kartik\grid\GridView;
...
/*register asset in your view*/
GridHelperAsset::register($this);
$id = 'name-for-your-grid';
?>
<?= GridView::widget([
    'id' => $id,
    /*disable automatic filtering, because we can*/
    'filterOnFocusOut' => false,
    ...
    'toolbar' => [
        /*yay, fancy button for manual filtering added. Of course, this handler can be attached anywhere*/
        Html::button("<i class='fa fa-filter'></i>", ['onclick' => new JsExpression('setFakeGridFilter("#'.$id.'")'), 'class' => 'btn btn-info']),
    ]
    ...
]) ?>
```