<?php
/* @var $this BonitationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bonitations',
);

$this->menu=array(
	array('label'=>'Create Bonitation', 'url'=>array('create')),
	array('label'=>'Manage Bonitation', 'url'=>array('admin')),
);
?>

<h1>Bonitations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
