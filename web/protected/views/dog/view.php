<?php
$this->breadcrumbs=array(
	'Dogs'=>array('index'),
	$model->name,
);

$this->menu=array(
array('label'=>'List Dog','url'=>array('index')),
array('label'=>'Create Dog','url'=>array('create')),
array('label'=>'Update Dog','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Dog','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Dog','url'=>array('admin')),
);
?>

<h1>View Dog #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'name',
		'sex',
		'color',
		'birthday',
		'deathday',
		'death_cause',
		'breed',
		'old_regnumber',
		'new_regnumber',
		'tattoo',
		'chip',
		'export_import',
		'breeding',
		'id_health',
		'id_fertilisation',
		'id_owner',
		'id_old_owner',
		'id_kennel_owner',
		'created_at',
		'updated_at',
		'state',
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
)); ?>
