<?php
/* @var $this EnduranceRunController */
/* @var $model EnduranceRun */
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
		<?php echo $form->label($model,'place'); ?>
		<?php echo $form->textField($model,'place',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'referee'); ?>
		<?php echo $form->textField($model,'referee',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'count_male_svp1'); ?>
		<?php echo $form->textField($model,'count_male_svp1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'count_female_svp1'); ?>
		<?php echo $form->textField($model,'count_female_svp1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'count_male_svp2'); ?>
		<?php echo $form->textField($model,'count_male_svp2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'count_female_svp2'); ?>
		<?php echo $form->textField($model,'count_female_svp2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'count_male_svp3'); ?>
		<?php echo $form->textField($model,'count_male_svp3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'count_female_svp3'); ?>
		<?php echo $form->textField($model,'count_female_svp3'); ?>
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