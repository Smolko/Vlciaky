<?php
/* @var $this BonitationController */
/* @var $model Bonitation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bonitation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_dog'); ?>
		<?php echo $form->textField($model,'id_dog'); ?>
		<?php echo $form->error($model,'id_dog'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bonitation_code'); ?>
		<?php echo $form->textField($model,'bonitation_code',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'bonitation_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'temperament'); ?>
		<?php echo $form->textField($model,'temperament',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'temperament'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textField($model,'comment',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'head_length'); ?>
		<?php echo $form->textField($model,'head_length'); ?>
		<?php echo $form->error($model,'head_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'head_width'); ?>
		<?php echo $form->textField($model,'head_width'); ?>
		<?php echo $form->error($model,'head_width'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'snout_length'); ?>
		<?php echo $form->textField($model,'snout_length'); ?>
		<?php echo $form->error($model,'snout_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ear_length'); ?>
		<?php echo $form->textField($model,'ear_length'); ?>
		<?php echo $form->error($model,'ear_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oblique_length'); ?>
		<?php echo $form->textField($model,'oblique_length'); ?>
		<?php echo $form->error($model,'oblique_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chest_depth'); ?>
		<?php echo $form->textField($model,'chest_depth'); ?>
		<?php echo $form->error($model,'chest_depth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chest_circle'); ?>
		<?php echo $form->textField($model,'chest_circle'); ?>
		<?php echo $form->error($model,'chest_circle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'front_leg_length'); ?>
		<?php echo $form->textField($model,'front_leg_length'); ?>
		<?php echo $form->error($model,'front_leg_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thigh_length'); ?>
		<?php echo $form->textField($model,'thigh_length'); ?>
		<?php echo $form->error($model,'thigh_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pastern_length'); ?>
		<?php echo $form->textField($model,'pastern_length'); ?>
		<?php echo $form->error($model,'pastern_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pastern_circle'); ?>
		<?php echo $form->textField($model,'pastern_circle'); ?>
		<?php echo $form->error($model,'pastern_circle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarsus_length'); ?>
		<?php echo $form->textField($model,'tarsus_length'); ?>
		<?php echo $form->error($model,'tarsus_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tibia_length'); ?>
		<?php echo $form->textField($model,'tibia_length'); ?>
		<?php echo $form->error($model,'tibia_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harmony'); ?>
		<?php echo $form->textField($model,'harmony'); ?>
		<?php echo $form->error($model,'harmony'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bonitation_place'); ?>
		<?php echo $form->textField($model,'bonitation_place',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'bonitation_place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'referee'); ?>
		<?php echo $form->textField($model,'referee',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'referee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->