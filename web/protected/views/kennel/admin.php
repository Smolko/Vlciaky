<?php
/* @var $this KennelController */
/* @var $model Kennel */

//$this->breadcrumbs=array(
//	'Kennels'=>array('index'),
//	'Manage',
//);

$this->menu=array(
	array('label'=>Yii::t('model','kennel.list'), 'url'=>array('index'),'visible'=>RightsHelper::can("Kennel.index")),
	array('label'=>Yii::t('model','kennel.create'), 'url'=>array('create'),'visible'=>RightsHelper::can("Kennel.create")),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kennel-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('model','kennel.admin'); ?></h1>


<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'kennel-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'name',
		'reg_number',
		//'registered_at',
		'id_user',
                /*
		'created_at',
		'updated_at',
		'state',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
