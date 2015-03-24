<?php
$this->breadcrumbs=array(
	'Registrations'=>array('index'),
	$model->name,
);

$this->menu=array(
array('label'=>'List Registration','url'=>array('index')),
array('label'=>'Create Registration','url'=>array('create')),
array('label'=>'Update Registration','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Registration','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Registration','url'=>array('admin')),
);
?>

<h1>View Registration #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'name',
		'surname',
		'title',
		'born_date',
		'login',
		'password',
		'street',
		'address_number',
		'city',
		'psc',
		'email',
		'web_site',
		'phone_number',
		'club_member',
		'request_member',
		'chs_owner',
		'chs_registred',
		'chs_number',
		'rank',
		'created_at',
		'updated_at',
		'state',
),
)); ?>
