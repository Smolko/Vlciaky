<?php
/* @var $this ExhibitionController */
/* @var $model Exhibition */

$this->breadcrumbs=array(
	'Exhibitions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Exhibition', 'url'=>array('admin')),
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
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div>
<?php
    Yii::import('bootstrap.helpers.TbHtml');
?>
    
<?php 
    $this->widget('bootstrap.widgets.TbGridView', array(
            'id'=>'exhibition-grid',
            'type' => TbHtml::GRID_TYPE_STRIPED,
            'dataProvider'=>$model->searchIndex(),
            //'itemView'=>'_viewIndex',
            'filter' => null,
            'template'=>"{items}",
            'columns'=>array(
                    array(
                        'type'=>'raw',
                        'name'=>'Name',
                        'value'=>'CHtml::link($data->name,array("exhibition/view&id=$data->id"))'
                    ),
                    'place',
                    'date',
                    'referee',
            ),
    )); 

?>
    

</div>
