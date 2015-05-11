<?php
//$this->breadcrumbs=array(
//	'Dogs',
//);

$this->menu=array(
    array('label'=>Yii::t('model','dog.create'),'url'=>array('create'),'visible'=>RightsHelper::can("Dog.create")),
    array('label'=>Yii::t('model','dog.admin'),'url'=>array('admin'),'visible'=>RightsHelper::can("Dog.admin")),

);
?>

<h1>Dogs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
