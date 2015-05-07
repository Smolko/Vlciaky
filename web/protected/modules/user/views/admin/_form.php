<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); 
        if($model->isNewRecord){
            echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>20)); 
            echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>128)); 
            
        }?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'surname',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->datepickerRow($model,'born_date',array('options'=>array(),'htmlOptions'=>array('class'=>'span5')),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Click on Month/Year at top to select a different year or type in (mm/dd/yyyy).')); ?>

	<?php echo $form->textFieldRow($model,'street',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'address_number',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'city',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'psc',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'web_site',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'phone_number',array('class'=>'span5')); ?>

	<?php 
         echo $form->dropDownListRow($model, 'club_member', array(0=>"No",1=>"Yes"), array('class' => 'span5'));

         echo $form->dropDownListRow($model, 'request_member', array(0=>"No",1=>"Yes"), array('class' => 'span5'));
    
         echo $form->dropDownListRow($model, 'chs_owner', array(0=>"No",1=>"Yes"), array('class' => 'span5'));
	 echo $form->datepickerRow($model,'chs_registred',array('options'=>array(),'htmlOptions'=>array('class'=>'span5')),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Click on Month/Year at top to select a different year or type in (mm/dd/yyyy).')); ?>

	<?php echo $form->textFieldRow($model,'chs_number',array('class'=>'span5','maxlength'=>50)); 
        echo $form->textFieldRow($model,'rank',array('class'=>'span5'));
        if(!$model->isNewRecord)
            echo $form->dropDownListRow($model, 'status', array(0=>"Neaktívny",1=>"Aktívny"), array('class' => 'span5')); 
        ?>


<?php 
//		$profileFields=$profile->getFields();
//		if ($profileFields) {
//			foreach($profileFields as $field) {
			?>
	<div class="row">
		<?php //echo $form->labelEx($profile,$field->varname); ?>
		<?php 
//		if ($widgetEdit = $field->widgetEdit($profile)) {
//			echo $widgetEdit;
//		} elseif ($field->range) {
//			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
//		} elseif ($field->field_type=="TEXT") {
//			echo CHtml::activeTextArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
//		} else {
//			echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
//		}
		 ?>
		<?php //echo $form->error($profile,$field->varname); ?>
	</div>
			<?php
//			}
//		}
?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
