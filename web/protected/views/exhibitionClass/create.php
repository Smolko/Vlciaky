<?php
/* @var $this ExhibitionClassController */
/* @var $model ExhibitionClass */

$this->breadcrumbs=array(
	'Exhibition Classes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExhibitionClass', 'url'=>array('index')),
	array('label'=>'Manage ExhibitionClass', 'url'=>array('admin')),
);
?>

<h1>Create ExhibitionClass</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>