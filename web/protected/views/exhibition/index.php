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
        $.fn.yiiListView.update(
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


<?php $this->widget('bootstrap.widgets.TbListView', array(
	'id'=>'exhibition-grid',
	'dataProvider'=>$model->searchIndex(),
	'itemView'=>'_viewIndex',
        'summaryText'=>"",
)); ?>
