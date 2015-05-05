<?php
/* @var $this ExhibitionController */
/* @var $model Exhibition */

$this->breadcrumbs=array(
	'BonitationAndYouthPresentation'=>array('index')
);

$this->menu=array(
	
	array('label'=>'Create BonitationAndYouthPresentation', 'url'=>array('create'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.create")),
	array('label'=>'Manage BonitationAndYouthPresentation', 'url'=>array('admin'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.admin")),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
        $.fn.yiiGridView.update(
                'bonitation-and-youth-presentation-grid',
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
            'id'=>'bonitation-and-youth-presentation-grid',
            'type' => TbHtml::GRID_TYPE_STRIPED,
            'dataProvider'=>$model->searchIndex(),
            //'itemView'=>'_viewIndex',
            'filter' => null,
            'template'=>"{items}",
            'columns'=>array(
                    array(
                        'type'=>'raw',
                        'name'=>'Name',
                        'value'=>'CHtml::link($data->place.",".$data->date,array("bonitationAndYouthPresentation/view&id=$data->id"))'
                    ),
                    'place',
                    'date',
                    'referee',
            ),
    )); 

?>
    

</div>
