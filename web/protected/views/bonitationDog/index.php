<?php
/* @var $this BonitationDogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bonitation Dogs',
);

$this->menu=array(
	array('label'=>'Create BonitationDog', 'url'=>array('create')),
	array('label'=>'Manage BonitationDog', 'url'=>array('admin')),
);
?>

<h1>Bonitation Dogs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
