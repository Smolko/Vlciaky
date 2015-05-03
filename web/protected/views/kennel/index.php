<?php
/* @var $this KennelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kennels',
);

$this->menu=array(
	array('label'=>'Create Kennel', 'url'=>array('create')),
	array('label'=>'Manage Kennel', 'url'=>array('admin')),
);
?>

<h1>Kennels</h1>

<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
        $.fn.yiiGridView.update(
                'kennel-grid',
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
    
<div>
<?php 
    $this->widget('bootstrap.widgets.TbGridView', array(
            'id'=>'kennel-grid',
            'type' => TbHtml::GRID_TYPE_STRIPED,
            'dataProvider'=>$model->searchIndex(),
            //'itemView'=>'_viewIndex',
            'filter' => null,
            'template'=>"{items}",
            'columns'=>array(
                    array(
                        'type'=>'raw',
                        'name'=>'Name',
                        'value'=>'CHtml::link($data->name,array("kennel/view&id=$data->id"))'
                    ),
                    'id_user',
                    'registered_at',
            ),
    )); 

?>
</div>