<?php
//$this->breadcrumbs=array(
//	'Dogs'=>array('index'),
//	'Create',
//);

$this->menu=array(
    array('label'=>Yii::t('model','dog.list'),'url'=>array('index'),'visible'=>RightsHelper::can("Dog.index")),
    array('label'=>Yii::t('model','dog.admin'),'url'=>array('admin'),'visible'=>RightsHelper::can("Dog.admin")),
);
?>

<h1><?php echo Yii::t('model','dog.create');?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
