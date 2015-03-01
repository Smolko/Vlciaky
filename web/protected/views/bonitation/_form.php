<?php
/* @var $this BonitationController */
/* @var $model Bonitation */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'bonitation-form',
        'enableAjaxValidation' => false,
        'type' => 'horizontal',
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>

        <?php
            echo $form->textFieldRow($model, 'id_dog');
            echo $form->textFieldRow($model, 'bonitation_code', array('size' => 60, 'maxlength' => 100));
            echo $form->textFieldRow($model, 'temperament', array('size' => 50, 'maxlength' => 50));
            echo $form->textFieldRow($model, 'comment', array('size' => 60, 'maxlength' => 1000));
            echo $form->textFieldRow($model, 'head_length');
            echo $form->textFieldRow($model, 'head_width');
            echo $form->textFieldRow($model, 'snout_length');
            echo $form->textFieldRow($model, 'ear_length');
            echo $form->textFieldRow($model, 'oblique_length');
            echo $form->textFieldRow($model, 'chest_depth');
            echo $form->textFieldRow($model, 'chest_circle');
            echo $form->textFieldRow($model, 'front_leg_length');
            echo $form->textFieldRow($model, 'thigh_length');
            echo $form->textFieldRow($model, 'pastern_length');
            echo $form->textFieldRow($model, 'pastern_circle');
            echo $form->textFieldRow($model, 'tarsus_length');
            echo $form->textFieldRow($model, 'tibia_length');
            echo $form->textFieldRow($model, 'harmony');
            echo $form->textFieldRow($model, 'type');
            echo $form->textFieldRow($model, 'bonitation_place', array('size' => 60, 'maxlength' => 200));
            echo $form->textFieldRow($model, 'referee', array('size' => 60, 'maxlength' => 200));
            echo $form->dropDownListRow($model, 'state', $model->stateList, array('class' => 'span5')); 
            echo $form->datepickerRow($model, 'date', array('options'=> array('viewformat' => 'yyyy-mm-dd', 'format' => 'yyyy-mm-dd')), array('prepend'=>'<i class="icon-calendar"></i>'));
        ?>


        <div class="form-actions">
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'submit',
                'type' => 'primary',
                'label' => $model->isNewRecord ? 'Create' : 'Save',
            ));
            ?>
        </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->