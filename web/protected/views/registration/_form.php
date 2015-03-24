<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'registration-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'surname',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->datepickerRow($model,'born_date',array('options'=>array(),'htmlOptions'=>array('class'=>'span5')),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Click on Month/Year at top to select a different year or type in (mm/dd/yyyy).')); ?>

	<?php echo $form->textFieldRow($model,'login',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'street',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'address_number',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'city',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'psc',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'web_site',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'phone_number',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'club_member',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'request_member',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'chs_owner',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->datepickerRow($model,'chs_registred',array('options'=>array(),'htmlOptions'=>array('class'=>'span5')),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Click on Month/Year at top to select a different year or type in (mm/dd/yyyy).')); ?>

	<?php echo $form->textFieldRow($model,'chs_number',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'rank',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'created_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'updated_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'state',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
