<?php
    $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' =>'Best Kennel',
        'headerIcon' => 'icon-dog',
        'htmlOptions' => array('class'=>'bootstrap-widget-table'),
        'id'=>'best-kennel-section',
        'headerButtons' => array(
            array(
                'class' => 'bootstrap.widgets.TbButton',
                'label' =>Yii::t('model','add'),
                'type' => 'primary',
                'id'=>'new_BestKennel',
                'htmlOptions' => array(
                  //  'onclick' => 'MeasurementActivity.addNcbType()'
                    )
                ),
            )
        ));?>
        <table>
            <tr>
                <th>Place</th>
                <th>Kennel</th>
            </tr>
            <?php 
                foreach ($model->exhibitionBestKennels as $key=>$m){
                    echo '<tr>';
                    echo '<td>'.CHtml::numberField('BestKennel_Place['.$key.']', $m->place, array('class'=>'place_input' )).'</td>'; 
                    echo '<td>'.CHtml::dropDownList('BestKennel_Kennel['.$key.']', $m->id_kennel, Kennel::model()->list, array()).'</td>';
                    echo '<td class="delete"></td>';
                    echo '</tr>';
                }
            ?>
            <tr class="hidden row-template">
                <td>
                    <?php echo CHtml::numberField('BestKennel_Place[XCounter]', NULL, array('class'=>'place_input')); ?>
                </td>
                <td>
                    <?php echo CHtml::dropDownList('BestKennel_Kennel[XCounter]',NULL ,Kennel::model()->list, array()); ?>
                </td>
                <td class="delete"></td>
            </tr>
        </table>
   <?php     
   $this->endWidget();
   
   Yii::app()->clientScript->registerScript('BestKennel', 
    "var ExhibitionCreate102 = new ExhibitionForm({
        table_elem : $('#best-kennel-section'),
        form_elem : $('#exhibition-form'), 
        button_add : $('#new_BestKennel'),
        })", 
    CClientScript::POS_END
    );


