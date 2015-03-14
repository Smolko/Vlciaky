<?php
/* @var $this ExhibitionDogCoupleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Exhibition Dog Couples',
);

$this->menu=array(
	array('label'=>'Create ExhibitionDogCouple', 'url'=>array('create')),
	array('label'=>'Manage ExhibitionDogCouple', 'url'=>array('admin')),
);
?>

<h1>Exhibition Dog Couples</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
