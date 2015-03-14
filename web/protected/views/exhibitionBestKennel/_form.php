<?php
/* @var $this ExhibitionBestKennelController */
/* @var $model ExhibitionBestKennel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'exhibition-best-kennel-form',
	'enableAjaxValidation'=>false,
        'type'=>'horizontal',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
                
            <?php 
                echo $form->textField($model,'id_exhibition'); 
                echo $form->textField($model,'id_kennel'); 
		echo $form->textField($model,'place'); 
		echo $form->textField($model,'created_at'); 
		echo $form->textField($model,'updated_at'); 
		echo $form->textField($model,'state'); 
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