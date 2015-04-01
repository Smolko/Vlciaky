<?php

    $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' =>"DogCouple",
        'headerIcon' => 'icon-dog',
        'htmlOptions' => array('class'=>'bootstrap-widget-table'),
        'id'=>'dog-couple-section',
        'headerButtons' => array(
            array(
                'class' => 'bootstrap.widgets.TbButton',
                'label' =>Yii::t('model','add'),
                'type' => 'primary',
                'id'=>'new_DogCouple',
                'htmlOptions' => array(
                  //  'onclick' => 'MeasurementActivity.addNcbType()'
                    )
                ),
            )
        ));?>
        <table>
            <tr>
                <th>Place</th>
                <th>Dog1</th>
                <th>Dog2</th>
            </tr>
            <?php 
                foreach ($model->exhibitionDogCouples as $key=>$m){
                    echo '<tr>';
                    echo '<td>'.CHtml::numberField('DogCouple_Place['.$key.']', $m->place, array()).'</td>'; 
                    echo '<td>'.CHtml::dropDownList('DogCouple_Dog1['.$key.']', $m->id_dog1, Dog::model()->maleList, array()).'</td>'; 
                    echo '<td>'.CHtml::dropDownList('DogCouple_Dog2['.$key.']', $m->id_dog2, Dog::model()->femaleList, array()).'</td>'; 
                    echo '<td class="delete"></td>';
                    echo '</td>';
                }
            ?>
            <tr class="hidden row-template">
                <td>
                    <?php echo CHtml::numberField('DogCouple_Place[XCounter]', NULL, array('class'=>'place_input')); ?>
                </td>
                <td>
                    <?php echo CHtml::dropDownList('DogCouple_Dog1[XCounter]',NULL ,Dog::model()->maleList, array()); ?>
                </td>
                <td>
                    <?php echo CHtml::dropDownList('DogCouple_Dog2[XCounter]',NULL ,Dog::model()->femaleList, array()); ?>
                </td>
                <td class="delete"></td>
            </tr>
        </table>
   <?php     
   $this->endWidget();
   
   Yii::app()->clientScript->registerScript("DogCouple", 
    "var ExhibitionCreate101 = new ExhibitionForm({
        table_elem : $('#dog-couple-section'),
        form_elem : $('#exhibition-form'), 
        button_add : $('#new_DogCouple'),
        })", 
    CClientScript::POS_END
    );

