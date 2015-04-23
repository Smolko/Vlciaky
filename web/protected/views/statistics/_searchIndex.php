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
		<?php  echo CHtml::label("year_min", "year_min", array ());
		 echo CHtml::textField("year_min", NULL, array ('id'=>'year_min' )); ?>		
	</div>
    
        <div class="row">
		<?php  echo CHtml::label("year_max", "year_max", array ());
		 echo CHtml::textField("year_max", NULL, array ('id'=>'year_max' )); ?>		
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton('SearchExhibitions', array(
                            'name'=>'searchExhibitions')
                        ); ?>
	</div>
        <div class="row buttons">
		<?php echo CHtml::submitButton('SearchWinners', array(
                            'name'=>'searchWinners')
                        ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->