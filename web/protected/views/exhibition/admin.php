<?php
/* @var $this ExhibitionController */
/* @var $model Exhibition */

$this->breadcrumbs=array(
	'Exhibitions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Exhibition', 'url'=>array('index'),'visible'=>RightsHelper::can("Exhibition.index")),
	array('label'=>'Create Exhibition', 'url'=>array('create'),'visible'=>RightsHelper::can("Exhibition.create")),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#exhibition-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Exhibitions</h1>

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
	'id'=>'exhibition-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'name',
		'place',
		'date',
		'referee',
                'count_male',
		'count_female',
          //      'pocet',
		/*'created_at',
		'updated_at',
		'state',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
