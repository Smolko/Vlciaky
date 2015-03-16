<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'dog-form',
    'enableAjaxValidation' => false,
    'type' => 'horizontal',
        //'action' => Yii::app()->createUrl("fuu"),
        ));
?>
    <?php echo CHtml::textField("ppp", ""); ?>

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
