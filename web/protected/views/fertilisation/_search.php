<?php
/* @var $this FertilisationController */
/* @var $model Fertilisation */
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
		<?php echo $form->label($model,'fertilisation_date'); ?>
		<?php echo $form->textField($model,'fertilisation_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'litter_date'); ?>
		<?php echo $form->textField($model,'litter_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'male_count'); ?>
		<?php echo $form->textField($model,'male_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'female_count'); ?>
		<?php echo $form->textField($model,'female_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment'); ?>
		<?php echo $form->textField($model,'comment',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_dog_mother'); ?>
		<?php echo $form->textField($model,'id_dog_mother'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_dog_father'); ?>
		<?php echo $form->textField($model,'id_dog_father'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kennel'); ?>
		<?php echo $form->textField($model,'id_kennel'); ?>
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
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->