<?php
/* @var $this BonitationController */
/* @var $model Bonitation */
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
		<?php echo $form->label($model,'id_dog'); ?>
		<?php echo $form->textField($model,'id_dog'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bonitation_code'); ?>
		<?php echo $form->textField($model,'bonitation_code',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'temperament'); ?>
		<?php echo $form->textField($model,'temperament',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment'); ?>
		<?php echo $form->textField($model,'comment',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'head_length'); ?>
		<?php echo $form->textField($model,'head_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'head_width'); ?>
		<?php echo $form->textField($model,'head_width'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'snout_length'); ?>
		<?php echo $form->textField($model,'snout_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ear_length'); ?>
		<?php echo $form->textField($model,'ear_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oblique_length'); ?>
		<?php echo $form->textField($model,'oblique_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chest_depth'); ?>
		<?php echo $form->textField($model,'chest_depth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chest_circle'); ?>
		<?php echo $form->textField($model,'chest_circle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'front_leg_length'); ?>
		<?php echo $form->textField($model,'front_leg_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thigh_length'); ?>
		<?php echo $form->textField($model,'thigh_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pastern_length'); ?>
		<?php echo $form->textField($model,'pastern_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pastern_circle'); ?>
		<?php echo $form->textField($model,'pastern_circle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarsus_length'); ?>
		<?php echo $form->textField($model,'tarsus_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tibia_length'); ?>
		<?php echo $form->textField($model,'tibia_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harmony'); ?>
		<?php echo $form->textField($model,'harmony'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bonitation_place'); ?>
		<?php echo $form->textField($model,'bonitation_place',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'referee'); ?>
		<?php echo $form->textField($model,'referee',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->