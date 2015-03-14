<?php
/* @var $this ExhibitionDogCoupleController */
/* @var $model ExhibitionDogCouple */

$this->breadcrumbs=array(
	'Exhibition Dog Couples'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExhibitionDogCouple', 'url'=>array('index')),
	array('label'=>'Manage ExhibitionDogCouple', 'url'=>array('admin')),
);
?>

<h1>Create ExhibitionDogCouple</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>