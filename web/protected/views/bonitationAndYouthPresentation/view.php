<?php
/* @var $this BonitationAndYouthPresentationController */
/* @var $model BonitationAndYouthPresentation */

$this->breadcrumbs=array(
	'Bonitation And Youth Presentations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BonitationAndYouthPresentation', 'url'=>array('index'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.index")),
	array('label'=>'Create BonitationAndYouthPresentation', 'url'=>array('create'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.create")),
	array('label'=>'Update BonitationAndYouthPresentation', 'url'=>array('update', 'id'=>$model->id),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.update")),
	array('label'=>'Delete BonitationAndYouthPresentation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.delete")),
	array('label'=>'Manage BonitationAndYouthPresentation', 'url'=>array('admin'),'visible'=>RightsHelper::can("BonitationAndYouthPresentation.admin")),
);
?>

<h1>View BonitationAndYouthPresentation #<?php echo $model->id; ?></h1>

<?php 
    $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'place',
		'date',
		'referee',
		'youth_presentation_male_count',
		'youth_presentation_female_count',
		'bonitation_male_count',
		'bonitation_female_count',
		/*'created_at',
		'updated_at',
		'state',*/
	),
    )); 


$dataprovider = new CActiveDataProvider('BonitationDog');
$dataprovider->setData($model->bonitationDogs);

echo "<br><h4>Bonitations</h4>";
Yii::import('bootstrap.helpers.TbHtml');
$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'dog-class-grid',
        'type' => TbHtml::GRID_TYPE_STRIPED,
	'dataProvider'=>$dataprovider,
        'filter' => null,
        'template'=>"{items}",
        'columns'=>array(
                array(
                    'name'=>'Dog',
                    'value'=>'Dog::model()->findByPk($data->id_dog)->name'
                ),
                /*array(
                    'name'=>'Class',
                    'value'=>'Dog::model()->getExhibitionClasses()[$data->class]'
                ),*/
                'evaluation',
	),
)); 

$dataprovider = new CActiveDataProvider('YouthPresentationDog');
$dataprovider->setData($model->youthPresentationDogs);

echo "<br><h4>Youth Presentations</h4>";
Yii::import('bootstrap.helpers.TbHtml');
$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'youth-presentation-dog-grid',
        'type' => TbHtml::GRID_TYPE_STRIPED,
	'dataProvider'=>$dataprovider,
        'filter' => null,
        'template'=>"{items}",
        'columns'=>array(
                array(
                    'name'=>'Dog',
                    'value'=>'Dog::model()->findByPk($data->id_dog)->name'
                ),
                /*array(
                    'name'=>'Class',
                    'value'=>'Dog::model()->getExhibitionClasses()[$data->class]'
                ),*/
                'evaluation',
	),
)); 
