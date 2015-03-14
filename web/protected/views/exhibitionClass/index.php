<?php
/* @var $this ExhibitionClassController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Exhibition Classes',
);

$this->menu=array(
	array('label'=>'Create ExhibitionClass', 'url'=>array('create')),
	array('label'=>'Manage ExhibitionClass', 'url'=>array('admin')),
);
?>

<h1>Exhibition Classes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
