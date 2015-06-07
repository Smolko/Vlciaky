<?php
/* @var $this BonitationAndYouthPresentationController */
/* @var $model BonitationAndYouthPresentation */

//$this->breadcrumbs=array(
//	'Bonitation And Youth Presentations'=>array('index'),
//	'Create',
//);

$this->menu=array(

        array('label'=>Yii::t('model','bonitationandyouthpresentation.list'), 'url'=>array('index'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.index")),
	array('label'=>Yii::t('model','bonitationandyouthpresentation.admin'), 'url'=>array('admin'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.admin")),
);
?>

<h1>Nový záznam</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>