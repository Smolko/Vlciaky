<?php
/* @var $this ExhibitionClassController */
/* @var $model ExhibitionClass */

$this->breadcrumbs=array(
	'Exhibition Classes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExhibitionClass', 'url'=>array('index')),
	array('label'=>'Create ExhibitionClass', 'url'=>array('create')),
	array('label'=>'View ExhibitionClass', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ExhibitionClass', 'url'=>array('admin')),
);
?>

<h1>Update ExhibitionClass <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>