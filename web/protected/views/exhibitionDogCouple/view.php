<?php
/* @var $this ExhibitionDogCoupleController */
/* @var $model ExhibitionDogCouple */

$this->breadcrumbs=array(
	'Exhibition Dog Couples'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ExhibitionDogCouple', 'url'=>array('index')),
	array('label'=>'Create ExhibitionDogCouple', 'url'=>array('create')),
	array('label'=>'Update ExhibitionDogCouple', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExhibitionDogCouple', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExhibitionDogCouple', 'url'=>array('admin')),
);
?>

<h1>View ExhibitionDogCouple #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                'id_exhibition',
		'id_dog1',
		'id_dog2',
		'place',
		'created_at',
		'updated_at',
		'state',
	),
)); ?>
