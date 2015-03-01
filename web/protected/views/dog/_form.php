<?php
/* @var $this DogController */
/* @var $model Dog */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'dog-form',
	'enableAjaxValidation'=>false,
        'type'=>'horizontal',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
            
        <?php 
            echo $form->textFieldRow($model,'id_health',array('size'=>30,'maxlength'=>30));
            echo $form->textFieldRow($model,'id_fertilisation',array('size'=>30,'maxlength'=>30));
            echo $form->textFieldRow($model,'id_owner',array('size'=>30,'maxlength'=>30));
            echo $form->textFieldRow($model,'id_old_owner',array('size'=>30,'maxlength'=>30));
            echo $form->textFieldRow($model,'id_kennel_owner',array('size'=>30,'maxlength'=>30));
            echo $form->textFieldRow($model,'name',array('size'=>60,'maxlength'=>200));
            echo $form->dropDownListRow($model, 'sex', $model->sexList, array('class' => 'span5'));
            echo $form->textFieldRow($model,'color',array('size'=>50,'maxlength'=>50));
            echo $form->datepickerRow($model, 'birthday', array('options'=> array('viewformat' => 'yyyy-mm-dd', 'format' => 'yyyy-mm-dd')), array('prepend'=>'<i class="icon-calendar"></i>'));
            echo $form->datepickerRow($model, 'deathday', array('options'=> array('viewformat' => 'yyyy-mm-dd', 'format' => 'yyyy-mm-dd')), array('prepend'=>'<i class="icon-calendar"></i>'));
            echo $form->textFieldRow($model,'death_cause',array('size'=>60,'maxlength'=>300));
            echo $form->textFieldRow($model,'breed',array('size'=>60,'maxlength'=>100));
            echo $form->textFieldRow($model,'old_regnumber',array('size'=>50,'maxlength'=>50));
            echo $form->textFieldRow($model,'new_regnumber',array('size'=>50,'maxlength'=>50));
            echo $form->dropDownListRow($model, 'tattoo', $model->tattooList, array('class' => 'span5'));
            echo $form->textFieldRow($model,'chip',array('size'=>30,'maxlength'=>30));
            echo $form->datepickerRow($model, 'export_import', array('options'=> array('viewformat' => 'yyyy-mm-dd', 'format' => 'yyyy-mm-dd')), array('prepend'=>'<i class="icon-calendar"></i>'));
            echo $form->textFieldRow($model,'breeding',array('size'=>30,'maxlength'=>30));
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