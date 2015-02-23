<?php
/* @var $this FertilisationController */
/* @var $model Fertilisation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fertilisation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fertilisation_date'); ?>
		<?php echo $form->textField($model,'fertilisation_date'); ?>
		<?php echo $form->error($model,'fertilisation_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'litter_date'); ?>
		<?php echo $form->textField($model,'litter_date'); ?>
		<?php echo $form->error($model,'litter_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'male_count'); ?>
		<?php echo $form->textField($model,'male_count'); ?>
		<?php echo $form->error($model,'male_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'female_count'); ?>
		<?php echo $form->textField($model,'female_count'); ?>
		<?php echo $form->error($model,'female_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textField($model,'comment',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_dog_mother'); ?>
		<?php echo $form->textField($model,'id_dog_mother'); ?>
		<?php echo $form->error($model,'id_dog_mother'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_dog_father'); ?>
		<?php echo $form->textField($model,'id_dog_father'); ?>
		<?php echo $form->error($model,'id_dog_father'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kennel'); ?>
		<?php echo $form->textField($model,'id_kennel'); ?>
		<?php echo $form->error($model,'id_kennel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->