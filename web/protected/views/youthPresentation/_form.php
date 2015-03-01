<?php
/* @var $this YouthPresentationController */
/* @var $model YouthPresentation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'youthpresentation-form',
	'enableAjaxValidation'=>false,
        'type'=>'horizontal',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
            <?php 
                echo $form->textFieldRow($model,'assessment',array('size'=>60,'maxlength'=>1000)); 
		echo $form->textFieldRow($model,'evaluation'); 
		echo $form->datepickerRow($model,'youth_presentation_date', array('options'=> array('viewformat' => 'yyyy-mm-dd', 'format' => 'yyyy-mm-dd')), array('prepend'=>'<i class="icon-calendar"></i>'));
		echo $form->textFieldRow($model,'youth_presentation_place',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'referee',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'id_dog'); 
		echo $form->dropDownListRow($model, 'state', $model->stateList, array('class' => 'span5')); 
            ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->