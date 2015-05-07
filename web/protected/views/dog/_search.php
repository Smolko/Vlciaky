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

<<<<<<< HEAD
		<?php echo $form->textFieldRow($model,'id_health',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'id_fertilisation',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'id_owner',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'id_old_owner',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'id_kennel_owner',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'created_at',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'updated_at',array('class'=>'span5')); ?>
=======
	<div class="row">
		<?php echo $form->label($model,'id_fertilisation'); ?>
		<?php echo $form->textField($model,'id_fertilisation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_owner'); ?>
		<?php echo $form->textField($model,'id_owner'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_old_owner'); ?>
		<?php echo $form->textField($model,'id_old_owner'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kennel'); ?>
		<?php echo $form->textField($model,'id_kennel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dlk'); ?>
		<?php echo $form->textField($model,'dlk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dbk'); ?>
		<?php echo $form->textField($model,'dbk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dwarf'); ?>
		<?php echo $form->textField($model,'dwarf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dm'); ?>
		<?php echo $form->textField($model,'dm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dna'); ?>
		<?php echo $form->textField($model,'dna',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dlk_vet'); ?>
		<?php echo $form->textField($model,'dlk_vet',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dlk_date'); ?>
		<?php echo $form->textField($model,'dlk_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dbk_vet'); ?>
		<?php echo $form->textField($model,'dbk_vet',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dbk_date'); ?>
		<?php echo $form->textField($model,'dbk_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dwarf_vet'); ?>
		<?php echo $form->textField($model,'dwarf_vet',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dwarf_date'); ?>
		<?php echo $form->textField($model,'dwarf_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dm_vet'); ?>
		<?php echo $form->textField($model,'dm_vet',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dm_date'); ?>
		<?php echo $form->textField($model,'dm_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>
>>>>>>> 7ea905f843ff9914d2f8ea27231a5d2ab4461b2c

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
