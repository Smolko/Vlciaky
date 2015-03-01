<?php
/* @var $this HealthController */
/* @var $model Health */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'health-form',
	'enableAjaxValidation'=>false,
        'type'=>'horizontal',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

            <?php 
                echo $form->dropDownListRow($model,'dlk', $model->yesNoList, array('class' => 'span5')); 
		echo $form->dropDownListRow($model,'dbk', $model->yesNoList, array('class' => 'span5')); 
		echo $form->dropDownListRow($model,'dwarf', $model->yesNoList, array('class' => 'span5')); ; 
		echo $form->dropDownListRow($model,'dm', $model->yesNoList, array('class' => 'span5'));  
		echo $form->textFieldRow($model,'dna',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'testicles',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'teeth',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'head',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'eyes',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'ears',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'neck',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'trunk',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'upper_limbs',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'lower_limbs',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'tail',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'fur',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'color',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'movement',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'attachment_url',array('size'=>60,'maxlength'=>300)); 
		echo $form->textFieldRow($model,'vet',array('size'=>60,'maxlength'=>200)); 
		echo $form->datepickerRow($model,'date', array('options'=> array('viewformat' => 'yyyy-mm-dd', 'format' => 'yyyy-mm-dd')), array('prepend'=>'<i class="icon-calendar"></i>')); 
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