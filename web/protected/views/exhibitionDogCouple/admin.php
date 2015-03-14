<?php
/* @var $this ExhibitionDogCoupleController */
/* @var $model ExhibitionDogCouple */

$this->breadcrumbs=array(
	'Exhibition Dog Couples'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ExhibitionDogCouple', 'url'=>array('index')),
	array('label'=>'Create ExhibitionDogCouple', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#exhibition-dog-couple-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Exhibition Dog Couples</h1>

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
	'id'=>'exhibition-dog-couple-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
                'id_exhibition',
		'id_dog1',
		'id_dog2',
		'place',
		'created_at',
		'updated_at',
		/*
		'state',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
