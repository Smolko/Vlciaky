<?php
$this->breadcrumbs=array(
	'Registrations'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Registration','url'=>array('index')),
array('label'=>'Create Registration','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('registration-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Registrations</h1>

<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'registration-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'name',
		'surname',
		'title',
		'born_date',
		'login',
		/*
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
		*/
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
