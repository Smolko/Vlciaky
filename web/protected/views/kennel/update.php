<?php
/* @var $this KennelController */
/* @var $model Kennel */

$this->breadcrumbs=array(
	'Kennels'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	   
        array('label'=>Yii::t('model','kennel.list'), 'url'=>array('index'),'visible'=>RightsHelper::can("Kennel.index")),
	array('label'=>Yii::t('model','kennel.create'), 'url'=>array('create'),'visible'=>RightsHelper::can("Kennel.create")),
	array('label'=>Yii::t('model','kennel.view'), 'url'=>array('view', 'id'=>$model->id),'visible'=>RightsHelper::can("Kennel.view")),
        array('label'=>Yii::t('model','kennel.admin'), 'url'=>array('admin'),'visible'=>RightsHelper::can("Kennel.admin")),
);
?>

<h1>Update Kennel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>