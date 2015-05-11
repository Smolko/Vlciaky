<?php
$this->breadcrumbs=array(
	'Dogs'=>array('index'),
	'Manage',
);

$this->menu=array(
    array('label'=>Yii::t('model','dog.admin'),'url'=>array('index'),'visible'=>RightsHelper::can("Dog.index")),
    array('label'=>Yii::t('model','dog.create'),'url'=>array('create'),'visible'=>RightsHelper::can("Dog.create")),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('dog-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Dogs</h1>

<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'dog-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(

		'id',
		'name',
		'sex',
		'color',
		'birthday',
		'deathday',
		/*
		'death_cause',
		'breed',
		'old_regnumber',
		'new_regnumber',
		'tattoo',
		'chip',
		'export_import',
		'breeding',

		'id_health',

		'id_fertilisation',
		'id_owner',
		'id_old_owner',
		'id_kennel',


		'created_at',
		'updated_at',
		'state',
		'dlk',
		'dbk',
		'dwarf',
		'dm',
		'dna',
		'dlk_vet',
		'dlk_date',
		'dbk_vet',
		'dbk_date',
		'dwarf_vet',
		'dwarf_date',
		'dm_vet',
		'dm_date',
		*/
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
