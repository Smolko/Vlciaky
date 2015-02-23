<?php
/* @var $this YouthPresentationController */
/* @var $model YouthPresentation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'youth-presentation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'assessment'); ?>
		<?php echo $form->textField($model,'assessment',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'assessment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evaluation'); ?>
		<?php echo $form->textField($model,'evaluation'); ?>
		<?php echo $form->error($model,'evaluation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'youth_presentation_date'); ?>
		<?php echo $form->textField($model,'youth_presentation_date'); ?>
		<?php echo $form->error($model,'youth_presentation_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'youth_presentation_place'); ?>
		<?php echo $form->textField($model,'youth_presentation_place',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'youth_presentation_place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'referee'); ?>
		<?php echo $form->textField($model,'referee',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'referee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_dog'); ?>
		<?php echo $form->textField($model,'id_dog'); ?>
		<?php echo $form->error($model,'id_dog'); ?>
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