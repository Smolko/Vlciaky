<?php
/* @var $this DogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dogs',
);

$this->menu=array(
	array('label'=>'Create Dog', 'url'=>array('create')),
	array('label'=>'Manage Dog', 'url'=>array('admin')),
        array('label'=>'Test Dog', 'url'=>array('test')),
);
?>

<h1>Dogs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
