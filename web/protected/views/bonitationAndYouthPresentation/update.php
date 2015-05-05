<?php
/* @var $this BonitationAndYouthPresentationController */
/* @var $model BonitationAndYouthPresentation */

$this->breadcrumbs=array(
	'Bonitation And Youth Presentations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BonitationAndYouthPresentation', 'url'=>array('index'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.index")),
	array('label'=>'Create BonitationAndYouthPresentation', 'url'=>array('create'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.create")),
	array('label'=>'View BonitationAndYouthPresentation', 'url'=>array('view', 'id'=>$model->id),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.view")),
	array('label'=>'Manage BonitationAndYouthPresentation', 'url'=>array('admin'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.admin")),
);
?>

<h1>Update BonitationAndYouthPresentation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>