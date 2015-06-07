<?php
/* @var $this ExhibitionController */
/* @var $model Exhibition */

//$this->breadcrumbs=array(
//	'Exhibitions'=>array('index'),
//	'Create',
//);

$this->menu=array(
	array('label'=>Yii::t('model','exhibition.list'), 'url'=>array('index'),'visible'=>RightsHelper::can("Exhibition.index")),
	array('label'=>Yii::t('model','exhibition.admin'), 'url'=>array('admin'),'visible'=>RightsHelper::can("Exhibition.admin")),
);
?>

<h1>Nová výstava</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>