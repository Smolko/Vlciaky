<?php

    $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' =>"ChildDog",
        'headerIcon' => 'icon-dog',
        'htmlOptions' => array('class'=>'bootstrap-widget-table'),
        'id'=>'child-dog-section',
        'headerButtons' => array(
            array(
                'class' => 'bootstrap.widgets.TbButton',
                'label' =>Yii::t('model','add'),
                'type' => 'primary',
                'id'=>'new_ChildDog',
                'htmlOptions' => array(
                  //  'onclick' => 'MeasurementActivity.addNcbType()'
                    )
                ),
            )
        ));?>
        <table>
            <tr>
                <th>Umiestnenie</th>
                <th>Pes</th>
                <th>Šteňa</th>
            </tr>
            <?php 
                foreach ($model->exhibitionChildDogs as $key=>$m){
                    echo '<tr>';
                    echo '<td>'.CHtml::numberField('ChildDog_Place['.$key.']', $m->place, array('class'=>'place_input')).'</td>'; 
                    echo '<td>'.CHtml::dropDownList('ChildDog_Dog['.$key.']', $m->id_dog, Dog::model()->list, array()).'</td>'; 
                    echo '<td>'.CHtml::textField('ChildDog_Child['.$key.']', $m->child, array('size'=>60,'maxlength'=>300)).'</td>'; 
                    echo '<td class="delete"></td>';
                    echo '</tr>';
                }
            ?>
            <tr class="hidden row-template">
                <td>
                    <?php echo CHtml::numberField('ChildDog_Place[XCounter]', NULL, array('class'=>'place_input')); ?>
                </td>
                <td>
                    <?php echo CHtml::dropDownList('ChildDog_Dog[XCounter]',NULL ,Dog::model()->list, array()); ?>
                </td>
                <td>
                    <?php echo CHtml::textField('ChildDog_Child[XCounter]', NULL, array('size'=>60,'maxlength'=>300)); ?>
                </td>
                <td class="delete"></td>
            </tr>
        </table>
   <?php     
   $this->endWidget();
   

    Yii::app()->clientScript->registerScript("ChidlDog", 
        "var ExhibitionCreate100 = new ExhibitionForm({
            table_elem : $('#child-dog-section'),
            form_elem : $('#exhibition-form'), 
            button_add : $('#new_ChildDog'),
            })", 
        CClientScript::POS_END
    );