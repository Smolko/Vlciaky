<?php
/* @var $this ExhibitionController */
/* @var $model Exhibition */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="row">
		<?php echo $form->label($model,'referee'); ?>
		<?php echo $form->textField($model,'referee',array('size'=>60,'maxlength'=>200)); ?>
	</div>
    
        <div class="row">
		<?php  echo CHtml::label(Yii::t('model','bonitationandyouthpresentation.count_min'), "count_min", array ());
		 echo CHtml::textField("count_min", NULL, array ('id'=>'count_min' )); ?>		
	</div>
    
        <div class="row">
		<?php  echo CHtml::label(Yii::t('model','bonitationandyouthpresentation.count_max'), "count_max", array ());
		 echo CHtml::textField("count_max", NULL, array ('id'=>'count_max' )); ?>		
	</div>
    
        <div class="row">
		<?php echo $form->label($model,'place'); ?>
		<?php echo $form->textField($model,'place',array('size'=>60,'maxlength'=>300)); ?>
	</div>
    
        <div class="row">
		<?php  echo CHtml::label(Yii::t('model','bonitationandyouthpresentation.year_min'), "year_min", array ());
		 echo CHtml::textField("year_min", NULL, array ('id'=>'year_min' )); ?>		
	</div>
    
        <div class="row">
		<?php  echo CHtml::label(Yii::t('model','bonitationandyouthpresentation.year_max'), "year_max", array ());
		 echo CHtml::textField("year_max", NULL, array ('id'=>'year_max' )); ?>		
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton('Hľadať', array(
                            'name'=>'searchEnduranceRuns')
                        ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->