<?php
/* @var $this BonitationAndYouthPresentationController */
/* @var $model BonitationAndYouthPresentation */

//$this->breadcrumbs=array(
//	'Bonitation And Youth Presentations'=>array('index'),
//	$model->id=>array('view','id'=>$model->id),
//	'Update',
//);

$this->menu=array(
	array('label'=>Yii::t('model','bonitationandyouthpresentation.list'), 'url'=>array('index'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.index")),
	array('label'=>Yii::t('model','bonitationandyouthpresentation.create'), 'url'=>array('create'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.create")),
	array('label'=>Yii::t('model','bonitationandyouthpresentation.view'), 'url'=>array('view', 'id'=>$model->id),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.view")),
	array('label'=>Yii::t('model','bonitationandyouthpresentation.admin'), 'url'=>array('admin'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.admin")),
);
?>

<h1>Uprav záznam</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>