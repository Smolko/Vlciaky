<?php
/* @var $this HealthController */
/* @var $model Health */

$this->breadcrumbs=array(
	'Healths'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Health', 'url'=>array('index')),
	array('label'=>'Create Health', 'url'=>array('create')),
	array('label'=>'Update Health', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Health', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Health', 'url'=>array('admin')),
);
?>

<h1>View Health #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dlk',
		'dbk',
		'dwarf',
		'dm',
		'dna',
		'testicles',
		'teeth',
		'head',
		'eyes',
		'ears',
		'neck',
		'trunk',
		'upper_limbs',
		'lower_limbs',
		'tail',
		'fur',
		'color',
		'movement',
		'attachment_url',
		'vet',
		'date',
		'created_at',
		'updated_at',
		'state',
	),
)); ?>
