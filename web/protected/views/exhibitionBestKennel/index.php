<?php
/* @var $this ExhibitionBestKennelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Exhibition Best Kennels',
);

$this->menu=array(
	array('label'=>'Create ExhibitionBestKennel', 'url'=>array('create')),
	array('label'=>'Manage ExhibitionBestKennel', 'url'=>array('admin')),
);
?>

<h1>Exhibition Best Kennels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
