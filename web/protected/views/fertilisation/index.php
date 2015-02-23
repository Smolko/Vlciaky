<?php
/* @var $this FertilisationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fertilisations',
);

$this->menu=array(
	array('label'=>'Create Fertilisation', 'url'=>array('create')),
	array('label'=>'Manage Fertilisation', 'url'=>array('admin')),
);
?>

<h1>Fertilisations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
