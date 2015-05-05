<?php
/* @var $this BonitationAndYouthPresentationController */
/* @var $model BonitationAndYouthPresentation */
/* @var $form CActiveForm */
?>

<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/Exhibition.js?v='.Yii::app()->params['version'], CClientScript::POS_END); 
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'bonitation-and-youth-presentation-form',
	'enableAjaxValidation'=>false,
        'type'=>'horizontal',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

            <?php
		echo $form->textFieldRow($model,'place',array('size'=>60,'maxlength'=>200)); 
		echo $form->datepickerRow($model,'date', array('options'=> array('viewformat' => 'yyyy-mm-dd', 'format' => 'yyyy-mm-dd')), array('prepend'=>'<i class="icon-calendar"></i>'));
		echo $form->textFieldRow($model,'referee',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'youth_presentation_male_count'); 
		echo $form->textFieldRow($model,'youth_presentation_female_count'); 
		echo $form->textFieldRow($model,'bonitation_male_count'); 
		echo $form->textFieldRow($model,'bonitation_female_count'); 
		echo $form->dropDownListRow($model, 'state', $model->stateList, array('class' => 'span5'));
                
                echo $this->renderPartial('_form_BonitationDog', array('model'=>$model)); 
                echo $this->renderPartial('_form_YouthPresentationDog', array('model'=>$model)); 
            ?>
        
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
