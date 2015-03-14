<?php
/* @var $this ExhibitionChildDogController */
/* @var $model ExhibitionChildDog */

$this->breadcrumbs=array(
	'Exhibition Child Dogs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ExhibitionChildDog', 'url'=>array('index')),
	array('label'=>'Create ExhibitionChildDog', 'url'=>array('create')),
	array('label'=>'Update ExhibitionChildDog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExhibitionChildDog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExhibitionChildDog', 'url'=>array('admin')),
);
?>

<h1>View ExhibitionChildDog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_exhibition',
		'id_dog',
		'child',
		'place',
		'created_at',
		'updated_at',
		'state',
	),
)); ?>
