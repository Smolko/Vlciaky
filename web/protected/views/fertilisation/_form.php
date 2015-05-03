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
		echo $form->datepickerRow($model,'fertilisation_date', array('options'=> array('viewformat' => 'yyyy-mm-dd', 'format' => 'yyyy-mm-dd')), array('prepend'=>'<i class="icon-calendar"></i>'));
		echo $form->datepickerRow($model,'litter_date', array('options'=> array('viewformat' => 'yyyy-mm-dd', 'format' => 'yyyy-mm-dd')), array('prepend'=>'<i class="icon-calendar"></i>')); 
		echo $form->numberFieldRow($model,'male_count'); 
		echo $form->numberFieldRow($model,'female_count'); 
		echo $form->textFieldRow($model,'comment',array('size'=>60,'maxlength'=>200)); 
		echo $form->dropDownListRow($model, 'id_dog_mother', Dog::model()->femaleList, array('class'=>'span5'));
                echo $form->dropDownListRow($model, 'id_dog_father', Dog::model()->maleList, array('class'=>'span5'));
                echo $form->dropDownListRow($model, 'id_kennel', Kennel::model()->list, array());
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