<?php
$this->breadcrumbs=array(
	'Dogs',
);

$this->menu=array(
array('label'=>'Create Dog','url'=>array('create')),
array('label'=>'Manage Dog','url'=>array('admin')),
);
?>

<h1>Dogs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
