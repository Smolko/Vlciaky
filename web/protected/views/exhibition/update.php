<?php
/* @var $this ExhibitionController */
/* @var $model Exhibition */

$this->breadcrumbs=array(
	'Exhibitions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	    
        array('label'=>'List Exhibition', 'url'=>array('index'),'visible'=>RightsHelper::can("Exhibition.index")),
	array('label'=>'Create Exhibition', 'url'=>array('create'),'visible'=>RightsHelper::can("Exhibition.create")),
        array('label'=>'View Exhibition', 'url'=>array('view', 'id'=>$model->id),'visible'=>RightsHelper::can("Exhibition.view")),
	array('label'=>'Manage Exhibition', 'url'=>array('admin'),'visible'=>RightsHelper::can("Exhibition.admin")),
);
?>

<h1>Update Exhibition <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>