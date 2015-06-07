<?php
/* @var $this KennelController */
/* @var $model Kennel */

$this->breadcrumbs=array(
	'Kennels'=>array('index'),
	'Create',
);

$this->menu=array(
	
        array('label'=>Yii::t('model','kennel.list'), 'url'=>array('index'),'visible'=>RightsHelper::can("Kennel.index")),
	array('label'=>Yii::t('model','kennel.admin'), 'url'=>array('admin'),'visible'=>RightsHelper::can("Kennel.admin")),
);
?>

<h1><?php echo Yii::t('model','kennel.create'); ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>