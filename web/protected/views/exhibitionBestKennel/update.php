<?php
/* @var $this ExhibitionBestKennelController */
/* @var $model ExhibitionBestKennel */

$this->breadcrumbs=array(
	'Exhibition Best Kennels'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExhibitionBestKennel', 'url'=>array('index')),
	array('label'=>'Create ExhibitionBestKennel', 'url'=>array('create')),
	array('label'=>'View ExhibitionBestKennel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ExhibitionBestKennel', 'url'=>array('admin')),
);
?>

<h1>Update ExhibitionBestKennel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>