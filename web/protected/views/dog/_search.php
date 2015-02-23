<?php
/* @var $this DogController */
/* @var $model Dog */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sex'); ?>
		<?php echo $form->textField($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deathday'); ?>
		<?php echo $form->textField($model,'deathday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'death_cause'); ?>
		<?php echo $form->textField($model,'death_cause',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'breed'); ?>
		<?php echo $form->textField($model,'breed',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'old_regnumber'); ?>
		<?php echo $form->textField($model,'old_regnumber',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'new_regnumber'); ?>
		<?php echo $form->textField($model,'new_regnumber',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tattoo'); ?>
		<?php echo $form->textField($model,'tattoo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chip'); ?>
		<?php echo $form->textField($model,'chip',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'export_import'); ?>
		<?php echo $form->textField($model,'export_import'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'breeding'); ?>
		<?php echo $form->textField($model,'breeding',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_health'); ?>
		<?php echo $form->textField($model,'id_health'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_fertilisation'); ?>
		<?php echo $form->textField($model,'id_fertilisation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_owner'); ?>
		<?php echo $form->textField($model,'id_owner'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_old_owner'); ?>
		<?php echo $form->textField($model,'id_old_owner'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kennel_owner'); ?>
		<?php echo $form->textField($model,'id_kennel_owner'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->