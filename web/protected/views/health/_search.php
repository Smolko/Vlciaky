<?php
/* @var $this HealthController */
/* @var $model Health */
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
		<?php echo $form->label($model,'dlk'); ?>
		<?php echo $form->textField($model,'dlk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dbk'); ?>
		<?php echo $form->textField($model,'dbk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dwarf'); ?>
		<?php echo $form->textField($model,'dwarf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dm'); ?>
		<?php echo $form->textField($model,'dm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dna'); ?>
		<?php echo $form->textField($model,'dna',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'testicles'); ?>
		<?php echo $form->textField($model,'testicles',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'teeth'); ?>
		<?php echo $form->textField($model,'teeth',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'head'); ?>
		<?php echo $form->textField($model,'head',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eyes'); ?>
		<?php echo $form->textField($model,'eyes',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ears'); ?>
		<?php echo $form->textField($model,'ears',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'neck'); ?>
		<?php echo $form->textField($model,'neck',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trunk'); ?>
		<?php echo $form->textField($model,'trunk',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'upper_limbs'); ?>
		<?php echo $form->textField($model,'upper_limbs',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lower_limbs'); ?>
		<?php echo $form->textField($model,'lower_limbs',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tail'); ?>
		<?php echo $form->textField($model,'tail',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fur'); ?>
		<?php echo $form->textField($model,'fur',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'movement'); ?>
		<?php echo $form->textField($model,'movement',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'attachment_url'); ?>
		<?php echo $form->textField($model,'attachment_url',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vet'); ?>
		<?php echo $form->textField($model,'vet',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
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