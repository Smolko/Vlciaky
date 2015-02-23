<?php
/* @var $this FertilisationController */
/* @var $model Fertilisation */

$this->breadcrumbs=array(
	'Fertilisations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Fertilisation', 'url'=>array('index')),
	array('label'=>'Create Fertilisation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fertilisation-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Fertilisations</h1>

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
	'id'=>'fertilisation-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fertilisation_date',
		'litter_date',
		'male_count',
		'female_count',
		'comment',
		/*
		'id_dog_mother',
		'id_dog_father',
		'id_kennel',
		'created_at',
		'updated_at',
		'state',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
