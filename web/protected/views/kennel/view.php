<?php
/* @var $this KennelController */
/* @var $model Kennel */

$this->breadcrumbs=array(
	'Kennels'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('model','kennel.list'), 'url'=>array('index'),'visible'=>RightsHelper::can("Kennel.index")),
	array('label'=>Yii::t('model','kennel.create'), 'url'=>array('create'),'visible'=>RightsHelper::can("Kennel.create")),
	array('label'=>Yii::t('model','kennel.update'), 'url'=>array('update', 'id'=>$model->id),'visible'=>RightsHelper::can("Kennel.update")&&$model->canUpdate()),
	array('label'=>Yii::t('model','kennel.delete'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'visible'=>RightsHelper::can("Kennel.delete")),
	array('label'=>Yii::t('model','kennel.admin'), 'url'=>array('admin'),'visible'=>RightsHelper::can("Kennel.admin")),
);
?>

<h1>View Kennel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'name',
		'reg_number',
		'registered_at',
		array(
                    'name'=>'id_user',
                    'value' => $model->userName
                ),
//		'created_at',
//		'updated_at',
		'state',
	),
)); ?>

<?php 

// DOG CLASS
$dataprovider = new CActiveDataProvider('Fertilisation');
$dataprovider->setData($model->fertilisations);

Yii::import('bootstrap.helpers.TbHtml');
$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'fertilisation-grid',
        'type' => TbHtml::GRID_TYPE_STRIPED,
	'dataProvider'=>$dataprovider,
        'filter' => null,
        'template'=>"{items}",
        'columns'=>array(
                array(
                    'type'=>'raw',
                    'header'=>'#',
                    'value'=>'CHtml::link($row,array("fertilisation/view&id=$data->id"))'
                ),
                'fertilisation_date',
		'litter_date',
                array(
                    'header'=>'Mother',
                    'value'=>'Dog::model()->findByPk($data->id_dog_mother)->name'
                ),
                array(
                    'header'=>'Father',
                    'value'=>'Dog::model()->findByPk($data->id_dog_father)->name'
                ),
                'male_count',
                'female_count',
                'comment'
	),
));

// DOG CLASS
$dataprovider = new CActiveDataProvider('Dog');
$dataprovider->setData($model->dogs);

Yii::import('bootstrap.helpers.TbHtml');
$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'dogs-grid',
        'type' => TbHtml::GRID_TYPE_STRIPED,
	'dataProvider'=>$dataprovider,
        'filter' => null,
        'template'=>"{items}",
        'columns'=>array(
                'name'
	),
)); 
