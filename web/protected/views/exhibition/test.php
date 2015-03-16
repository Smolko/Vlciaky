<?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'dog-form',
        'enableAjaxValidation' => false,
        'type' => 'vertical',
            //'action' => Yii::app()->createUrl("fuu"),
        'htmlOptions'=>array(
        'style' => 'width: 100%;',
        ),
    ));
        
?>

    <div>
        <div style="width: 200px; float:left; ">Rozhodca:</div> 
        <?php echo CHtml::textField("rozhodca", empty($_POST['rozhodca']) ? "" : $_POST['rozhodca']); ?>
    </div>
    <div>
        <div style="width: 200px; float:left; ">Počet psov od:</div>  
        <?php echo CHtml::textField("pocetpsovod", empty($_POST['pocetpsovod']) ? "" : $_POST['pocetpsovod']); ?>
    </div>
    <div>
        <div style="width: 200px; float:left; ">Počet psov do:</div>  
        <?php echo CHtml::textField("pocetpsovdo", empty($_POST['pocetpsovdo']) ? "" : $_POST['pocetpsovdo']); ?>
    </div>
    <div>
        <div style="width: 200px; float:left; ">Miesto konania:</div>  
        <?php echo CHtml::textField("miestokonania", empty($_POST['miestokonania']) ? "" : $_POST['miestokonania']); ?>
    </div>
    <div>
        <div style="width: 200px; float:left; ">Rok konania od:</div>  
        <?php echo CHtml::textField("rokkonaniaod", empty($_POST['rokkonaniaod']) ? "" : $_POST['rokkonaniaod']); ?>
    </div>
    <div>
        <div style="width: 200px; float:left; ">Rok konania do:</div>  
        <?php echo CHtml::textField("rokkonaniado", empty($_POST['rokkonaniado']) ? "" : $_POST['rokkonaniado']); ?>
    </div>

    <div>
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => 'Find',
        ));
        ?>
    </div>

<?php $this->endWidget(); ?>

<table class="items table">
    <tr>
        <th>
            Name
        </th>
        <th>
            Place
        </th>
        <th>
            Date
        </th>
        <th>
            Referee
        </th>
    </tr>
<?php $this->widget('zii.widgets.CListView', array(       
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viewTest',
        
)); ?>
</table>