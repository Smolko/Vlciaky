<?php
/* @var $this EnduranceRunController */
/* @var $model EnduranceRun */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'endurancerun-form',
	'enableAjaxValidation'=>false,
        'type'=>'horizontal',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

            <?php 
                echo $form->textFieldRow($model,'place'); 
		echo $form->textFieldRow($model,'order'); 
		echo $form->textFieldRow($model,'handler',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'type',array('size'=>50,'maxlength'=>50)); 
		echo $form->textFieldRow($model,'evaluation',array('size'=>60,'maxlength'=>300)); 
		echo $form->textFieldRow($model,'andurance_run_place',array('size'=>60,'maxlength'=>200)); 
		echo $form->datepickerRow($model,'date', array('options'=> array('viewformat' => 'yyyy-mm-dd', 'format' => 'yyyy-mm-dd')), array('prepend'=>'<i class="icon-calendar"></i>'));
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