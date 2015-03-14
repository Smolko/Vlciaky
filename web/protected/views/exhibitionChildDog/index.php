<?php
/* @var $this ExhibitionChildDogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Exhibition Child Dogs',
);

$this->menu=array(
	array('label'=>'Create ExhibitionChildDog', 'url'=>array('create')),
	array('label'=>'Manage ExhibitionChildDog', 'url'=>array('admin')),
);
?>

<h1>Exhibition Child Dogs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
