<?php
/* @var $this EnduranceRunController */
/* @var $model EnduranceRun */
//
//$this->breadcrumbs=array(
//	'Endurance Runs'=>array('index'),
//	$model->id,
//);

$this->menu=array(
	array('label'=>Yii::t('model','endurancerun.list'), 'url'=>array('index'),'visible'=>RightsHelper::can("Endurancerun.index")),
	array('label'=>Yii::t('model','endurancerun.create'), 'url'=>array('create'),'visible'=>RightsHelper::can("Endurancerun.create")),
	array('label'=>Yii::t('model','endurancerun.update'), 'url'=>array('update', 'id'=>$model->id),'visible'=>RightsHelper::can("Endurancerun.update")),
	array('label'=>Yii::t('model','endurancerun.delete'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'visible'=>RightsHelper::can("Endurancerun.delete")),
	array('label'=>Yii::t('model','endurancerun.admin'), 'url'=>array('admin'),'visible'=>RightsHelper::can("Endurancerun.admin")),
);
?>

<h1>Datail záznamu</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'place',
		'date',
		'referee',
		'count_male_svp1',
		'count_female_svp1',
		'count_male_svp2',
		'count_female_svp2',
		'count_male_svp3',
		'count_female_svp3',
		'created_at',
		'updated_at',
		'state',
	),
)); ?>

<?php

$dataprovider = new CActiveDataProvider('EnduranceRun');
$dataprovider->setData($model->enduranceRunDogs);

Yii::import('bootstrap.helpers.TbHtml');
$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'dog-class-grid',
        'type' => TbHtml::GRID_TYPE_STRIPED,
	'dataProvider'=>$dataprovider,
        'filter' => null,
        'template'=>"{items}",
        'columns'=>array(
		'place',
                'order',
                array(
                    'name'=>'Dog',
                    'value'=>'Dog::model()->findByPk($data->id_dog)->name'
                ),
                /*array(
                    'name'=>'Class',
                    'value'=>'Dog::model()->getExhibitionClasses()[$data->class]'
                ),*/
                'evaluation',
                'duration',
                array(
                    'type'=>'raw',
                    'name'=>'Type',
                    'value'=>'EnduranceRun::model()->getSVPList()[$data->type]'
                )
	),
)); 
?>
