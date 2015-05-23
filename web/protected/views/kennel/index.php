<?php
/* @var $this KennelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kennels',
);

$this->menu=array(
	       
	array('label'=>Yii::t('model','kennel.create'), 'url'=>array('create'),'visible'=>RightsHelper::can("Kennel.create")),
	array('label'=>Yii::t('model','kennel.admin'), 'url'=>array('admin'),'visible'=>RightsHelper::can("Kennel.admin")),
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
                        'name'=>'Meno',
                        'value'=>'CHtml::link($data->name,array("kennel/view&id=$data->id"))'
                    ),
                    'id_user',
                    'registered_at',
            ),
    )); 

?>
</div>
