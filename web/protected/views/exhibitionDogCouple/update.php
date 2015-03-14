<?php
/* @var $this ExhibitionDogCoupleController */
/* @var $model ExhibitionDogCouple */

$this->breadcrumbs=array(
	'Exhibition Dog Couples'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExhibitionDogCouple', 'url'=>array('index')),
	array('label'=>'Create ExhibitionDogCouple', 'url'=>array('create')),
	array('label'=>'View ExhibitionDogCouple', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ExhibitionDogCouple', 'url'=>array('admin')),
);
?>

<h1>Update ExhibitionDogCouple <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>