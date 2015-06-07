<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'dog-form',
	'enableAjaxValidation'=>false,
        'type'=>'horizontal',
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

        <?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('maxlength'=>200));

        echo $form->fileFieldRow($model, 'imageFile');
        echo CHtml::image(Yii::app()->request->baseUrl."/".$model->path,"image",array("width"=>200));
        echo $form->dropDownListRow($model,'id_kennel', Kennel::model()->list,array('empty'=>NULL)); 
	echo $form->dropDownListRow($model,'id_owner', User::model()->userList,array('empty'=>NULL)); 
	echo $form->dropDownListRow($model,'id_old_owner', User::model()->userList,array('empty'=>NULL));
//        echo $form->select2Row($model, 'id_owner', array(
//          'asDropDownList' => false,
//          'options' => CMap::mergeArray(
//                FormHelper::commonSelect2AjaxOptions(Yii::app()->controller->createUrl('/User/suggest')), 
//                array(
//                    'multiple'=>false,
//                    'width' => '50%',
//                    'initSelection' => 'js: function(element, callback) {
//                        var data = {
//                            id: "'.$model->id_owner.'",
//                            label: "'.$institutionName.'"
//                        };
//                        callback(data);
//                    }',
//                )
//            )
//        )); 
	echo $form->dropDownListRow($model,'sex',  Dog::model()->sexList,array()); 
	echo $form->textFieldRow($model,'color',array('maxlength'=>50)); ?>

	<?php echo $form->datepickerRow($model,'birthday', array('options'=> array('viewformat' => 'yyyy-mm-dd', 'format' => 'yyyy-mm-dd')), array('prepend'=>'<i class="icon-calendar"></i>')); ?>

	<?php echo $form->datepickerRow($model,'deathday', array('options'=> array('viewformat' => 'yyyy-mm-dd', 'format' => 'yyyy-mm-dd')), array('prepend'=>'<i class="icon-calendar"></i>')); ?>

	<?php echo $form->textFieldRow($model,'death_cause',array('maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'breed',array('maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'old_regnumber',array('maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'new_regnumber',array('maxlength'=>50)); ?>

	<?php //echo $form->textFieldRow($model,'tattoo',array()); 
              echo $form->dropDownListRow($model,'tattoo', Dog::model()->tattooList,array('empty'=>NULL)); 
	echo $form->textFieldRow($model,'chip',array('maxlength'=>30)); ?>

	<?php echo $form->datepickerRow($model,'export_import', array('options'=> array('viewformat' => 'yyyy-mm-dd', 'format' => 'yyyy-mm-dd')), array('prepend'=>'<i class="icon-calendar"></i>')); ?>

	<?php echo $form->textFieldRow($model,'breeding',array('maxlength'=>30)); ?>




	<?php 
        if(!$model->isNewRecord)
                    echo $form->dropDownListRow($model, 'state', $model->stateList, array('class' => 'span5')); 
        ?>
        <?php echo $form->textFieldRow($model,'dlk',array('class'=>'span5')); ?>

        <?php echo "<h2>Zdravie<h2>";
              echo $form->textFieldRow($model,'dbk',array('class'=>'span5')); ?>

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
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
