<?php
/* @var $this HealthController */
/* @var $model Health */

$this->breadcrumbs=array(
	'Healths'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Health', 'url'=>array('index')),
	array('label'=>'Create Health', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#health-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Healths</h1>

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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'health-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'dlk',
		'dbk',
		'dwarf',
		'dm',
		'dna',
		/*
		'testicles',
		'teeth',
		'head',
		'eyes',
		'ears',
		'neck',
		'trunk',
		'upper_limbs',
		'lower_limbs',
		'tail',
		'fur',
		'color',
		'movement',
		'attachment_url',
		'vet',
		'date',
		'created_at',
		'updated_at',
		'state',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
