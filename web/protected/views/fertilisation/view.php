<?php
/* @var $this FertilisationController */
/* @var $model Fertilisation */

$this->breadcrumbs=array(
	'Fertilisations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Fertilisation', 'url'=>array('index')),
	array('label'=>'Create Fertilisation', 'url'=>array('create')),
	array('label'=>'Update Fertilisation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Fertilisation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fertilisation', 'url'=>array('admin')),
);
?>

<h1>View Fertilisation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fertilisation_date',
		'litter_date',
		'male_count',
		'female_count',
		'comment',
		'id_dog_mother',
		'id_dog_father',
		'id_kennel',
		'created_at',
		'updated_at',
		'state',
	),
)); ?>
