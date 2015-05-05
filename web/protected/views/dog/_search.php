<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>200)); ?>

		<?php echo $form->textFieldRow($model,'sex',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'color',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->datepickerRow($model,'birthday',array('options'=>array(),'htmlOptions'=>array('class'=>'span5')),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Click on Month/Year at top to select a different year or type in (mm/dd/yyyy).')); ?>

		<?php echo $form->datepickerRow($model,'deathday',array('options'=>array(),'htmlOptions'=>array('class'=>'span5')),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Click on Month/Year at top to select a different year or type in (mm/dd/yyyy).')); ?>

		<?php echo $form->textFieldRow($model,'death_cause',array('class'=>'span5','maxlength'=>300)); ?>

		<?php echo $form->textFieldRow($model,'breed',array('class'=>'span5','maxlength'=>100)); ?>

		<?php echo $form->textFieldRow($model,'old_regnumber',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'new_regnumber',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'tattoo',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'chip',array('class'=>'span5','maxlength'=>30)); ?>

		<?php echo $form->datepickerRow($model,'export_import',array('options'=>array(),'htmlOptions'=>array('class'=>'span5')),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Click on Month/Year at top to select a different year or type in (mm/dd/yyyy).')); ?>

		<?php echo $form->textFieldRow($model,'breeding',array('class'=>'span5','maxlength'=>30)); ?>

		<?php echo $form->textFieldRow($model,'id_health',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'id_fertilisation',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'id_owner',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'id_old_owner',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'id_kennel_owner',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'created_at',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'updated_at',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'state',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'dlk',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'dbk',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'dwarf',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'dm',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'dna',array('class'=>'span5','maxlength'=>200)); ?>

		<?php echo $form->textFieldRow($model,'dlk_vet',array('class'=>'span5','maxlength'=>200)); ?>

		<?php echo $form->datepickerRow($model,'dlk_date',array('options'=>array(),'htmlOptions'=>array('class'=>'span5')),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Click on Month/Year at top to select a different year or type in (mm/dd/yyyy).')); ?>

		<?php echo $form->textFieldRow($model,'dbk_vet',array('class'=>'span5','maxlength'=>200)); ?>

		<?php echo $form->datepickerRow($model,'dbk_date',array('options'=>array(),'htmlOptions'=>array('class'=>'span5')),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Click on Month/Year at top to select a different year or type in (mm/dd/yyyy).')); ?>

		<?php echo $form->textFieldRow($model,'dwarf_vet',array('class'=>'span5','maxlength'=>200)); ?>

		<?php echo $form->datepickerRow($model,'dwarf_date',array('options'=>array(),'htmlOptions'=>array('class'=>'span5')),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Click on Month/Year at top to select a different year or type in (mm/dd/yyyy).')); ?>

		<?php echo $form->textFieldRow($model,'dm_vet',array('class'=>'span5','maxlength'=>200)); ?>

		<?php echo $form->datepickerRow($model,'dm_date',array('options'=>array(),'htmlOptions'=>array('class'=>'span5')),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Click on Month/Year at top to select a different year or type in (mm/dd/yyyy).')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
