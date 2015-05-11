<?php
/* @var $this ExhibitionController */
/* @var $model Exhibition */
//
//$this->breadcrumbs=array(
//	'Exhibitions'=>array('index'),
//	$model->name=>array('view','id'=>$model->id),
//	'Update',
//);

$this->menu=array(
	    
        array('label'=>Yii::t('model','exhibition.list'), 'url'=>array('index'),'visible'=>RightsHelper::can("Exhibition.index")),
	array('label'=>Yii::t('model','exhibition.create'), 'url'=>array('create'),'visible'=>RightsHelper::can("Exhibition.create")),
        array('label'=>Yii::t('model','exhibition.view'), 'url'=>array('view', 'id'=>$model->id),'visible'=>RightsHelper::can("Exhibition.view")),
	array('label'=>Yii::t('model','exhibition.admin'), 'url'=>array('admin'),'visible'=>RightsHelper::can("Exhibition.admin")),
);
?>

<h1><?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>