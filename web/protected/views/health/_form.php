<?php
/* @var $this HealthController */
/* @var $model Health */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'health-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dlk'); ?>
		<?php echo $form->textField($model,'dlk'); ?>
		<?php echo $form->error($model,'dlk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dbk'); ?>
		<?php echo $form->textField($model,'dbk'); ?>
		<?php echo $form->error($model,'dbk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dwarf'); ?>
		<?php echo $form->textField($model,'dwarf'); ?>
		<?php echo $form->error($model,'dwarf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dm'); ?>
		<?php echo $form->textField($model,'dm'); ?>
		<?php echo $form->error($model,'dm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dna'); ?>
		<?php echo $form->textField($model,'dna',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'dna'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'testicles'); ?>
		<?php echo $form->textField($model,'testicles',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'testicles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'teeth'); ?>
		<?php echo $form->textField($model,'teeth',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'teeth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'head'); ?>
		<?php echo $form->textField($model,'head',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'head'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eyes'); ?>
		<?php echo $form->textField($model,'eyes',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'eyes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ears'); ?>
		<?php echo $form->textField($model,'ears',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ears'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'neck'); ?>
		<?php echo $form->textField($model,'neck',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'neck'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trunk'); ?>
		<?php echo $form->textField($model,'trunk',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'trunk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'upper_limbs'); ?>
		<?php echo $form->textField($model,'upper_limbs',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'upper_limbs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lower_limbs'); ?>
		<?php echo $form->textField($model,'lower_limbs',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'lower_limbs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tail'); ?>
		<?php echo $form->textField($model,'tail',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'tail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fur'); ?>
		<?php echo $form->textField($model,'fur',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'fur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'movement'); ?>
		<?php echo $form->textField($model,'movement',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'movement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attachment_url'); ?>
		<?php echo $form->textField($model,'attachment_url',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'attachment_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vet'); ?>
		<?php echo $form->textField($model,'vet',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'vet'); ?>
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