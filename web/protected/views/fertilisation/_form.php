<?php
/* @var $this FertilisationController */
/* @var $model Fertilisation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'fertilisation-form',
	'enableAjaxValidation'=>false,
        'type'=>'horizontal',
)); ?>


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

            <?php 
                echo $form->textFieldRow($model,'fertilisation_date'); 
		echo $form->textFieldRow($model,'litter_date'); 
		echo $form->textFieldRow($model,'male_count'); 
		echo $form->textFieldRow($model,'female_count'); 
		echo $form->textFieldRow($model,'comment',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'id_dog_mother'); 
		echo $form->textFieldRow($model,'id_dog_father'); 
		echo $form->textFieldRow($model,'id_kennel');
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