<?php
/* @var $this ExhibitionBestKennelController */
/* @var $model ExhibitionBestKennel */

$this->breadcrumbs=array(
	'Exhibition Best Kennels'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ExhibitionBestKennel', 'url'=>array('index')),
	array('label'=>'Create ExhibitionBestKennel', 'url'=>array('create')),
	array('label'=>'Update ExhibitionBestKennel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExhibitionBestKennel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExhibitionBestKennel', 'url'=>array('admin')),
);
?>

<h1>View ExhibitionBestKennel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                'id_exhibition',
		'id_kennel',
		'place',
		'created_at',
		'updated_at',
		'state',
	),
)); ?>
