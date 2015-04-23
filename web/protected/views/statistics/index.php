<?php
/* @var $this ExhibitionController */
/* @var $model Exhibition */

$this->breadcrumbs=array(
	'Exhibitions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Exhibition', 'url'=>array('list')),
	array('label'=>'Create Exhibition', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
        $.fn.yiiGridView.update(
                'exhibition-grid',
                {data: $(this).serialize()}
            );
	return false;
});
");
?>

<div class="search-form">
<?php $this->renderPartial('_searchIndex',array(
	//'model'=>$model,
)); ?>
</div><!-- search-form -->

<div>
    
<?php
    Yii::import('bootstrap.helpers.TbHtml');
?>
        <div class="row2">
		<?php  echo CHtml::label("Dog Count: ".Dog::model()->getDogCount(),"Dog Count",  array());
		// echo Dog::model()->getExportDogCount(); ?>		
	</div>
     <div class="row2">
		<?php  echo CHtml::label("Export: ".Dog::model()->getExportDogCount(),"Export",  array());
		// echo Dog::model()->getExportDogCount(); ?>		
	</div>
    <div class="row2">
		<?php  echo CHtml::label("Import: ".Dog::model()->getImportDogCount(),"Export",  array());
		// echo Dog::model()->getExportDogCount(); ?>		
	</div>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'exhibition-grid',
        'type' => TbHtml::GRID_TYPE_STRIPED,
	'dataProvider'=>Dog::model()->search(),
	//'itemView'=>'_viewIndex',
        'filter' => null,
        'template'=>"{items}",
        'columns'=>array(
		'name',
		'place',
		'date',
		'referee',
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>
    

</div>
