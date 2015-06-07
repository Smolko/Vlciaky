<?php

$svpList=EnduranceRun::model()->getSVPList();
foreach ($svpList as $key => $svp){
    $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' =>$svp,
        'headerIcon' => 'icon-dog',
        'htmlOptions' => array('class'=>'bootstrap-widget-table'),
        'id'=>'endurance-run-dog-'.$svp.'-section',
        'headerButtons' => array(
            array(
                'class' => 'bootstrap.widgets.TbButton',
                'label' =>Yii::t('model','add'),
                'type' => 'primary',
                'id'=>'new_EnduranceRunDog'.$svp,
                'htmlOptions' => array(
                  //  'onclick' => 'MeasurementActivity.addNcbType()'
                    )
                ),
            )
        ));?>
        <table>
            <tr>
                <th>Miesto</th>
                <th>Poradie</th>
                <th>Pes</th>
                <th>Majiteľ</th>
                <th>Čas</th>
                <th>Hodnotenie</th>
            </tr>
            <?php 
                foreach ($model->enduranceRunDogs as $key2=>$m){
                    if ($m->type == $key){
                        echo '<tr>';
                        echo '<td>'.CHtml::numberField('EnduranceRun_Place'.$key.'['.$key2.']', $m->place, array('class'=>'place_input')).'</td>'; 
                        echo '<td>'.CHtml::numberField('EnduranceRun_Order'.$key.'['.$key2.']', $m->order, array('class'=>'place_input')).'</td>'; 
                        echo '<td>'.CHtml::dropDownList('EnduranceRun_Dog'.$key.'['.$key2.']', $m->id_dog, Dog::model()->list, array()).'</td>'; 
                        echo '<td>'.CHtml::textField('EnduranceRun_Handler'.$key.'['.$key2.']', $m->handler, array('size'=>60,'maxlength'=>200)).'</td>'; 
                        echo '<td>'.CHtml::numberField('EnduranceRun_Duration'.$key.'['.$key2.']', $m->duration, array('class'=>'place_input')).'</td>'; 
                        echo '<td>'.CHtml::textField('EnduranceRun_Evaluation'.$key.'['.$key2.']', $m->evaluation, array('size'=>60,'maxlength'=>200)).'</td>'; 
                        echo '<td>'.CHtml::textField('EnduranceRun_Type'.$key.'['.$key2.']', $m->type, array('class'=>'hidden')).'</td>';
                        echo '<td class="delete"></td>';
                        echo '</tr>';
                    }
                }
            ?>
            <tr class="hidden row-template">
                <td>
                    <?php echo CHtml::numberField('EnduranceRun_Place'.$key.'[XCounter]', NULL, array('class'=>'place_input')); ?>
                </td>
                <td>
                    <?php echo CHtml::numberField('EnduranceRun_Order'.$key.'[XCounter]', NULL, array('class'=>'place_input')); ?>
                </td>
                <td>
                    <?php echo CHtml::dropDownList('EnduranceRun_Dog'.$key.'[XCounter]',NULL ,Dog::model()->list, array()); ?>
                </td>
                <td>
                    <?php echo CHtml::textField('EnduranceRun_Handler'.$key.'[XCounter]', NULL, array('size'=>20,'maxlength'=>200)); ?>
                </td>
                <td>
                    <?php echo CHtml::numberField('EnduranceRun_Duration'.$key.'[XCounter]', NULL, array('class'=>'place_input')); ?>
                </td>
                <td>
                    <?php echo CHtml::textField('EnduranceRun_Evaluation'.$key.'[XCounter]', NULL, array('size'=>60,'maxlength'=>200)); ?>
                </td>
                <td>
                    <?php echo CHtml::textField('EnduranceRun_Type'.$key.'[XCounter]', $key, array('class'=>'hidden')); ?>
                </td>
                <td class="delete"></td>
            </tr>
        </table>
   <?php     
   $this->endWidget();
   

    Yii::app()->clientScript->registerScript("EnduranceRunDog".$svp, 
        "var EnduranceRunCreate".$svp." = new ExhibitionForm({
            table_elem : $('#endurance-run-dog-".$svp."-section'),
            form_elem : $('#endurancerun-form'), 
            button_add : $('#new_EnduranceRunDog".$svp."'),
            })", 
        CClientScript::POS_END
    );
}