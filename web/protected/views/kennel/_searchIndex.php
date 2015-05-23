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
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->dropDownList($model,'state',$model->stateList); ?>
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
		<?php echo CHtml::submitButton('searchKennels', array(
                            'name'=>'searchKennels')
                        ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->