<?php
/* @var $this EnduranceRunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Endurance Runs',
);

$this->menu=array(
	array('label'=>'Create EnduranceRun', 'url'=>array('create')),
	array('label'=>'Manage EnduranceRun', 'url'=>array('admin')),
);
?>

<h1>Endurance Runs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
