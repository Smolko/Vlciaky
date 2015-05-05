<?php
/* @var $this EnduranceRunController */
/* @var $model EnduranceRun */

$this->breadcrumbs=array(
	'Endurance Runs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EnduranceRun', 'url'=>array('index'),'visible'=>RightsHelper::can("Endurancerun.index")),
	array('label'=>'Create EnduranceRun', 'url'=>array('create'),'visible'=>RightsHelper::can("Endurancerun.create")),
	array('label'=>'View EnduranceRun', 'url'=>array('view', 'id'=>$model->id),'visible'=>RightsHelper::can("Endurancerun.view")),
    	array('label'=>'Manage EnduranceRun', 'url'=>array('admin'),'visible'=>RightsHelper::can("Endurancerun.admin")),
);
?>

<h1>Update EnduranceRun <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>