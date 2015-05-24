<?php
//$this->breadcrumbs=array(
//	'Dogs'=>array('index'),
//	$model->name,
//);

$this->menu=array(
array('label'=>Yii::t('model','dog.list'),'url'=>array('index'),'visible'=>RightsHelper::can("Dog.index")),
array('label'=>Yii::t('model','dog.create'),'url'=>array('create'),'visible'=>RightsHelper::can("Dog.create")),
array('label'=>Yii::t('model','dog.update'),'url'=>array('update','id'=>$model->id),'visible'=>RightsHelper::can("Dog.update")),
array('label'=>Yii::t('model','dog.delete'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'visible'=>RightsHelper::can("Dog.delete")),
array('label'=>Yii::t('model','dog.admin'),'url'=>array('admin'),'visible'=>RightsHelper::can("Dog.admin")),
);
?>

<h1><?php echo $model->name; ?></h1>


<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'name',
		array(
                    'name' => 'sex',
                    'value' => $model->sexName
                ),
		'color',
		'birthday',
		'deathday',
		'death_cause',
		'breed',
		'old_regnumber',
		'new_regnumber',
		array(
                    'name' => 'tatoo',
                    'value' => $model->tattooSet
                ),
		'chip',
		'export_import',
		'breeding',

		
		array(
                    'name' => 'id_owner',
                    'value' => $model->ownerName
                ),
		
		'id_old_owner',
//		array(
//                    'name' => 'id_kennel',
//                    'value' => $model->kennelName
//                ),

	
		array(
                    'name' => 'state',
                    'value' => $model->stateLabel
                ),
	
),
)); 
echo '<h2>Zdravie</h2>';
$this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'dlk',
		'dbk',
		'dwarf',
		'dm',
		'dna',
		'dlk_vet',
		'dlk_date',
		'dbk_vet',
		'dbk_date',
		'dwarf_vet',
		'dwarf_date',
		'dm_vet',
		'dm_date',
),
));?>
