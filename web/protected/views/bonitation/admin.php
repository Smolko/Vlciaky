<?php
/* @var $this BonitationController */
/* @var $model Bonitation */

$this->breadcrumbs=array(
	'Bonitations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Bonitation', 'url'=>array('index')),
	array('label'=>'Create Bonitation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bonitation-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bonitations</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'bonitation-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'id_dog',
		'bonitation_code',
		'temperament',
		'comment',
		'head_length',
		/*
		'head_width',
		'snout_length',
		'ear_length',
		'oblique_length',
		'chest_depth',
		'chest_circle',
		'front_leg_length',
		'thigh_length',
		'pastern_length',
		'pastern_circle',
		'tarsus_length',
		'tibia_length',
		'harmony',
		'type',
		'bonitation_place',
		'referee',
		'state',
		'date',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
