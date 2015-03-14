<?php
/* @var $this ExhibitionClassController */
/* @var $model ExhibitionClass */

$this->breadcrumbs=array(
	'Exhibition Classes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ExhibitionClass', 'url'=>array('index')),
	array('label'=>'Create ExhibitionClass', 'url'=>array('create')),
	array('label'=>'Update ExhibitionClass', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExhibitionClass', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExhibitionClass', 'url'=>array('admin')),
);
?>

<h1>View ExhibitionClass #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_exhibition',
		'class',
		'id_dog',
		'place',
		'ranking',
		'titul',
		'created_at',
		'updated_at',
		'state',
	),
)); ?>
