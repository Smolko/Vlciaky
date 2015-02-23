<?php
/* @var $this EnduranceRunController */
/* @var $model EnduranceRun */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'endurance-run-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'place'); ?>
		<?php echo $form->textField($model,'place'); ?>
		<?php echo $form->error($model,'place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'handler'); ?>
		<?php echo $form->textField($model,'handler',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'handler'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evaluation'); ?>
		<?php echo $form->textField($model,'evaluation',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'evaluation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'andurance_run_place'); ?>
		<?php echo $form->textField($model,'andurance_run_place',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'andurance_run_place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
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