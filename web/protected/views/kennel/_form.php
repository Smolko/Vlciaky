<?php
/* @var $this KennelController */
/* @var $model Kennel */
/* @var $form CActiveForm */
?>

<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/Exhibition.js?v='.Yii::app()->params['version'], CClientScript::POS_END); 
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'kennel-form',
	'enableAjaxValidation'=>false,
        'type'=>'horizontal',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

            <?php 
                echo $form->textFieldRow($model,'name',array('size'=>60,'maxlength'=>200)); 
		echo $form->textFieldRow($model,'reg_number',array('size'=>50,'maxlength'=>50)); 
		echo $form->datepickerRow($model,'registered_at', array('options'=> array('viewformat' => 'yyyy-mm-dd', 'format' => 'yyyy-mm-dd')), array('prepend'=>'<i class="icon-calendar"></i>'));
		echo $form->dropDownListRow($model, 'id_user', User::model()->userList, array('class' => 'span5')); 
		echo $form->dropDownListRow($model, 'state', $model->stateList, array('class' => 'span5')); 
                
                echo $this->renderPartial('_form_Fertilisation', array('model'=>$model));
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