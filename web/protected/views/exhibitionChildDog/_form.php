<?php
/* @var $this ExhibitionChildDogController */
/* @var $model ExhibitionChildDog */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'exhibition-child-dog-form',
	'enableAjaxValidation'=>false,
        'type'=>'horizontal',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

            <?php 
                echo $form->textFieldRow($model,'id_exhibition'); 
		echo $form->textFieldRow($model,'id_dog'); 
		echo $form->textFieldRow($model,'child',array('size'=>60,'maxlength'=>300)); 
		echo $form->textFieldRow($model,'place'); 
                echo $form->textFieldRow($model,'created_at'); 
		echo $form->textFieldRow($model,'updated_at'); 
		echo $form->textFieldRow($model,'state'); 
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