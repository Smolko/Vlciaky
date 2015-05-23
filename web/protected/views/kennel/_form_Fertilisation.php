<?php

    $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' =>Yii::t("model",'fertilisation.fertilisations'),
        'headerIcon' => 'icon-dog',
        'htmlOptions' => array('class'=>'bootstrap-widget-table'),
        'id'=>'fertilisation-section',
        'headerButtons' => array(
            array(
                'class' => 'bootstrap.widgets.TbButton',
                'label' =>Yii::t('model','add'),
                'type' => 'primary',
                'id'=>'new_Fertilisation',
                'htmlOptions' => array(
                  //  'onclick' => 'MeasurementActivity.addNcbType()'
                    )
                ),
            )
        ));?>
        <table>
            <tr>
                 <?php 
                    echo "<th>".Yii::t("model",'fertilisation.fertilisation_date')."</th>";
                    echo "<th>".Yii::t("model",'fertilisation.litter_date')."</th>";
                    echo "<th>".Yii::t("model",'fertilisation.male_count')."</th>"; 
                    echo "<th>".Yii::t("model",'fertilisation.female_count')."Count female</th>";
                    echo "<th>".Yii::t("model",'fertilisation.male')."</th>";
                    echo "<th>".Yii::t("model",'fertilisation.female')."</th>";
                    echo "<th>".Yii::t("model",'fertilisation.comment')."</th>";
                 ?>
            </tr>
            <?php 
                foreach ($model->fertilisations as $key=>$m){
                    echo '<tr>';
                    echo '<td>'.CHtml::dateField('Fertilisation_FertilisationDate['.$key.']',$m->fertilisation_date, array());
                    echo '<td>'.CHtml::dateField('Fertilisation_LitterDate['.$key.']',$m->litter_date, array());
                    
                    echo '<td>'.CHtml::numberField('Fertilisation_MaleCount['.$key.']', $m->male_count, array('class'=>'place_input')).'</td>'; 
                    echo '<td>'.CHtml::numberField('Fertilisation_FemaleCount['.$key.']', $m->female_count, array('class'=>'place_input')).'</td>'; 
                    echo '<td>'.CHtml::dropDownList('Fertilisation_DogFather['.$key.']', $m->id_dog_father, Dog::model()->maleList, array()).'</td>'; 
                    echo '<td>'.CHtml::dropDownList('Fertilisation_DogMother['.$key.']', $m->id_dog_mother, Dog::model()->femaleList, array()).'</td>'; 
                    
                    echo '<td>'.CHtml::textField('Fertilisation_Comment['.$key.']',$m->comment, array('size'=>60,'maxlength'=>200));
                    echo '<td class="delete"></td>';
                    echo '</td>';
                }
            ?>
            <tr class="hidden row-template">
                <td>
                    <?php echo CHtml::dateField('Fertilisation_FertilisationDate[XCounter]', NULL, array()); ?>
                </td>
                <td>
                    <?php echo CHtml::dateField('Fertilisation_LitterDate[XCounter]', NULL, array()); ?>
                </td>
                <td>
                    <?php echo CHtml::numberField('Fertilisation_MaleCount[XCounter]',NULL, array('class'=>'place_input')); ?>
                </td>
                </td>
                <td>
                    <?php echo CHtml::numberField('Fertilisation_FemaleCount[XCounter]',NULL, array('class'=>'place_input')); ?>
                </td>
                <td>
                    <?php echo CHtml::dropDownList('Fertilisation_DogFather[XCounter]',NULL ,Dog::model()->maleList, array('width'=>'30px')); ?>
                </td>
                <td>
                    <?php echo CHtml::dropDownList('Fertilisation_DogMother[XCounter]',NULL ,Dog::model()->femaleList, array()); ?>
                </td>
                <td>
                    <?php echo CHtml::textField('Fertilisation_Comment[XCounter]',NULL , array('size'=>60,'maxlength'=>200)); ?>
                </td>
                <td class="delete"></td>
            </tr>
        </table>
   <?php     
   $this->endWidget();
   
   Yii::app()->clientScript->registerScript("Fertilisation", 
    "var ExhibitionCreate101 = new ExhibitionForm({
        table_elem : $('#fertilisation-section'),
        form_elem : $('#kennel-form'), 
        button_add : $('#new_Fertilisation'),
        })", 
    CClientScript::POS_END
    );

