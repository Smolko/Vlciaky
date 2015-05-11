<?php
//$this->breadcrumbs=array(
//	'Dogs'=>array('index'),
//	$model->name=>array('view','id'=>$model->id),
//	'Update',
//);

	$this->menu=array(
	array('label'=>Yii::t('model','dog.list'),'url'=>array('index'),'visible'=>RightsHelper::can("Dog.index")),
	array('label'=>Yii::t('model','dog.create'),'url'=>array('create'),'visible'=>RightsHelper::can("Dog.create")),
	array('label'=>Yii::t('model','dog.view'),'url'=>array('view','id'=>$model->id),'visible'=>RightsHelper::can("Dog.update"),'visible'=>RightsHelper::can("Dog.delete")),
	array('label'=>Yii::t('model','dog.admin'),'url'=>array('admin'),'visible'=>RightsHelper::can("Dog.admin")),
            

	);
	?>

	<h1>Update Dog <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>