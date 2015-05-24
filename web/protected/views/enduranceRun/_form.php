<?php
/* @var $this EnduranceRunController */
/* @var $model EnduranceRun */
/* @var $form CActiveForm */
?>

<div class="form">
    
<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/Exhibition.js?v='.Yii::app()->params['version'], CClientScript::POS_END); 
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'endurancerun-form',
	'enableAjaxValidation'=>false,
        'type'=>'horizontal',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

            <?php 
                echo $form->textFieldRow($model,'place',array('size'=>60,'maxlength'=>200)); 
		echo $form->datepickerRow($model,'date', array('options'=> array('viewformat' => 'yyyy-mm-dd', 'format' => 'yyyy-mm-dd')), array('prepend'=>'<i class="icon-calendar"></i>'));
		echo $form->textFieldRow($model,'referee',array('size'=>60,'maxlength'=>200)); 
                echo $form->textFieldRow($model,'count_male_svp1'); 
                echo $form->textFieldRow($model,'count_female_svp1'); 
                echo $form->textFieldRow($model,'count_male_svp2'); 
                echo $form->textFieldRow($model,'count_female_svp2'); 
                echo $form->textFieldRow($model,'count_male_svp3'); 
                echo $form->textFieldRow($model,'count_female_svp3'); 
                if(!$model->isNewRecord)
                    echo $form->dropDownListRow($model, 'state', $model->stateList, array('class' => 'span5')); 
                
                echo $this->renderPartial('_form_EnduranceRunDog', array('model'=>$model));
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