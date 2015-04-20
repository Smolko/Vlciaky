<?php
/* @var $this YouthPresentationDogController */
/* @var $model YouthPresentationDog */
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
		<?php echo $form->label($model,'id_bonitation_and_youth_presentation'); ?>
		<?php echo $form->textField($model,'id_bonitation_and_youth_presentation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_dog'); ?>
		<?php echo $form->textField($model,'id_dog'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assessment'); ?>
		<?php echo $form->textField($model,'assessment',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'evaluation'); ?>
		<?php echo $form->textField($model,'evaluation',array('size'=>60,'maxlength'=>200)); ?>
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