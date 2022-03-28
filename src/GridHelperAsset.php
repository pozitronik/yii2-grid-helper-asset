<?php
declare(strict_types = 1);

namespace pozitronik\grid_helper_asset;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Class GridHelperAsset
 */
class GridHelperAsset extends AssetBundle {

	/**
	 * {@inheritDoc}
	 */
	public function init():void {
		$this->depends = [YiiAsset::class];
		$this->sourcePath = __DIR__.'/assets/gridHelper/';
		$this->js = ['js/gridHelper.js'];
		parent::init();

	}
}