<?php
/* @var $this ExhibitionController */
/* @var $model Exhibition */

$this->breadcrumbs=array(
	'Exhibitions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Exhibition', 'url'=>array('index'),'visible'=>RightsHelper::can("Exhibition.index")),
	array('label'=>'Create Exhibition', 'url'=>array('create'),'visible'=>RightsHelper::can("Exhibition.create")),
	array('label'=>'Update Exhibition', 'url'=>array('update', 'id'=>$model->id),'visible'=>RightsHelper::can("Exhibition.update")),
	array('label'=>'Delete Exhibition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'visible'=>RightsHelper::can("Exhibition.delete")),
	array('label'=>'Manage Exhibition', 'url'=>array('admin'),'visible'=>RightsHelper::can("Exhibition.admin")),
);
?>

<h1>View Exhibition #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'name',
		'place',
		'date',
		'referee',
		'count_male',
		'count_female',
//                'created_at',
//		'updated_at',
//		'state',
	),
)); ?>

<?php 

// DOG CLASS
$dataprovider = new CActiveDataProvider('ExhibitionClass');
$dataprovider->setData($model->exhibitionClasses);
$classes = Dog::model()->getExhibitionClasses();

Yii::import('bootstrap.helpers.TbHtml');
$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'dog-class-grid',
        'type' => TbHtml::GRID_TYPE_STRIPED,
	'dataProvider'=>$dataprovider,
        'filter' => null,
        'template'=>"{items}",
        'columns'=>array(
		'place',
                array(
                    'name'=>'Dog',
                    'value'=>'Dog::model()->findByPk($data->id_dog)->name'
                ),
                array(
                    'name'=>'Class',
                    'value'=>'Dog::model()->getExhibitionClasses()[$data->class]'
                ),
                'ranking',
                'titul',
	),
)); 


// CHILD DOG
$dataprovider = new CActiveDataProvider('ExhibitionChildDog');
$dataprovider->setData($model->exhibitionChildDogs);

Yii::import('bootstrap.helpers.TbHtml');
$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'child-dog-grid',
        'type' => TbHtml::GRID_TYPE_STRIPED,
	'dataProvider'=>$dataprovider,
        'filter' => null,
        'template'=>"{items}",
        'columns'=>array(
		'place',
                array(
                    'name'=>'Dog',
                    'value'=>'Dog::model()->findByPk($data->id_dog)->name'
                ),
		'child',
	),
)); 

// DOG COUPLE
$dataprovider = new CActiveDataProvider('ExhibitionDogCouple');
$dataprovider->setData($model->exhibitionDogCouples);

Yii::import('bootstrap.helpers.TbHtml');
$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'dog-couple-grid',
        'type' => TbHtml::GRID_TYPE_STRIPED,
	'dataProvider'=>$dataprovider,
        'filter' => null,
        'template'=>"{items}",
        'columns'=>array(
		'place',
                array(
                    'name'=>'Dog1',
                    'value'=>'Dog::model()->findByPk($data->id_dog1)->name'
                ),
                array(
                    'name'=>'Dog2',
                    'value'=>'Dog::model()->findByPk($data->id_dog2)->name'
                ),
	),
)); 

// BEST KENNEL
$dataprovider = new CActiveDataProvider('ExhibitionBestKennel');
$dataprovider->setData($model->exhibitionBestKennels);

Yii::import('bootstrap.helpers.TbHtml');
$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'best-kennel-grid',
        'type' => TbHtml::GRID_TYPE_STRIPED,
	'dataProvider'=>$dataprovider,
        'filter' => null,
        'template'=>"{items}",
        'columns'=>array(
		'place',
                array(
                    'name'=>'Kennel',
                    'value'=>'Kennel::model()->findByPk($data->id_kennel)->name'
                ),
	),
)); 

?>

