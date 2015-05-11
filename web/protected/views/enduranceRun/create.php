<?php
/* @var $this EnduranceRunController */
/* @var $model EnduranceRun */

//$this->breadcrumbs=array(
//	'Endurance Runs'=>array('index'),
//	'Create',
//);

$this->menu=array(
	array('label'=>Yii::t('model','endurancerun.list'), 'url'=>array('index'),'visible'=>RightsHelper::can("Endurancerun.index")),
	array('label'=>Yii::t('model','endurancerun.admin'), 'url'=>array('admin'),'visible'=>RightsHelper::can("Endurancerun.admin")),
);
?>

<h1>Create EnduranceRun</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>