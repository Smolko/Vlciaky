<?php
/* @var $this ExhibitionController */
/* @var $model Exhibition */

$this->breadcrumbs=array(
	'EnduranceRuns'=>array('index'),
	'index',
);

$this->menu=array(
	array('label'=>'Manage EnduranceRuns', 'url'=>array('admin')),
	array('label'=>'Create EnduranceRun', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
        $.fn.yiiGridView.update(
                'endurance-run-grid',
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

<?php
    Yii::import('bootstrap.helpers.TbHtml');
?>
    
<?php 
    $this->widget('bootstrap.widgets.TbGridView', array(
            'id'=>'endurance-run-grid',
            'type' => TbHtml::GRID_TYPE_STRIPED,
            'dataProvider'=>$model->searchIndex(),
            //'itemView'=>'_viewIndex',
            'filter' => null,
            'template'=>"{items}",
            'columns'=>array(
                    array(
                        'type'=>'raw',
                        'name'=>'Name',
                        'value'=>'CHtml::link($data->place.", ".$data->date, array("enduranceRun/view&id=$data->id"))'
                    ),
                    'referee',
            ),
    )); 