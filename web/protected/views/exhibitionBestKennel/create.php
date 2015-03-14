<?php
/* @var $this ExhibitionBestKennelController */
/* @var $model ExhibitionBestKennel */

$this->breadcrumbs=array(
	'Exhibition Best Kennels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExhibitionBestKennel', 'url'=>array('index')),
	array('label'=>'Manage ExhibitionBestKennel', 'url'=>array('admin')),
);
?>

<h1>Create ExhibitionBestKennel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>