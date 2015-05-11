<?php
/* @var $this BonitationAndYouthPresentationController */
/* @var $model BonitationAndYouthPresentation */

//$this->breadcrumbs=array(
//	'Bonitation And Youth Presentations'=>array('index'),
//	'Manage',
//);

$this->menu=array(
	array('label'=>Yii::t('model','bonitationandyouthpresentation.list'), 'url'=>array('index'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.index")),
	array('label'=>Yii::t('model','bonitationandyouthpresentation.create'), 'url'=>array('create'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.create")),
	
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bonitation-and-youth-presentation-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bonitation And Youth Presentations</h1>

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
	'id'=>'bonitation-and-youth-presentation-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'place',
		'date',
		'referee',
                /*
		'youth_presentation_male_count',
		'youth_presentation_female_count',
		'bonitation_male_count',
		'bonitation_female_count',
		'created_at',
		'updated_at',
		'state',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
