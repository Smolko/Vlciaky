<?php
$classes = Dog::model()->getExhibitionClasses();

// MALE
echo "<h3>Male</h3>";
foreach($classes as $key=>$class){

    $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' =>$class,
        'headerIcon' => 'icon-dog',
        'htmlOptions' => array('class'=>'bootstrap-widget-table'),
        'id'=>'Male-'.$class.'-section',
        'headerButtons' => array(
            array(
                'class' => 'bootstrap.widgets.TbButton',
                'label' =>Yii::t('model','add'),
                'type' => 'primary',
                'id'=>'new_Male'.$class,
                'htmlOptions' => array(
                  //  'onclick' => 'MeasurementActivity.addNcbType()'
                    )
                ),
            )
        ));?>
        <table>
            <tr>
                <th>Place</th>
                <th>Dog</th>
                <th>Ranking</th>
                <th>Titul</th>
                <th></th>
            </tr>
            <?php 
                foreach ($model->exhibitionClasses as $k=>$m){
                    if ($m->class == $key){
                        echo '<tr>';                  
                        echo '<td>'.CHtml::numberField('Class'.$key.'_Place['.$k.']', $m->place, array('class'=>'place_input')).'</td>'; 
                        echo '<td>'.CHtml::dropDownList('Class'.$key.'_Dog['.$k.']', $m->id_dog, Dog::model()->maleList, array()).'</td>'; 
                        echo '<td>'.CHtml::textField('Class'.$key.'_Ranking['.$k.']', $m->ranking, array('size'=>60,'maxlength'=>200)).'</td>'; 
                        echo '<td>'.CHtml::textField('Class'.$key.'_Titul['.$k.']', $m->titul, array('size'=>60,'maxlength'=>200)).'</td>'; 
                        echo '<td class="delete"></td>';
                        echo '</tr>';
                    }
                }
            ?>
            <tr class="hidden row-template">              
                <td>
                    <?php echo CHtml::numberField('Class'.$key.'_Place[XCounter]', NULL, array('class'=>'place_input')); ?>
                </td>
                <td>
                    <?php echo CHtml::dropDownList('Class'.$key.'_Dog[XCounter]',NULL ,Dog::model()->maleList, array()); ?>
                </td>
                <td>
                    <?php echo CHtml::textField('Class'.$key.'_Ranking[XCounter]', NULL, array('size'=>60,'maxlength'=>200)); ?>
                </td>
                <td>
                    <?php echo CHtml::textField('Class'.$key.'_Titul[XCounter]', NULL, array('size'=>60,'maxlength'=>200)); ?>
                </td>
                <td class="delete"></td>
            </tr>
        </table>
   <?php     
   $this->endWidget();
   
   Yii::app()->clientScript->registerScript($class."-male", 
    "var ExhibitionCreate".$key."Male = new ExhibitionForm({
        table_elem : $('#Male-".$class."-section'),
        form_elem : $('#exhibition-form'), 
        button_add : $('#new_Male".$class."'),
        })", 
    CClientScript::POS_END
    );  
}


// FEMALE
echo "<h3>Female</h3>";
foreach($classes as $key=>$class){
    
    $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' =>$class,
        'headerIcon' => 'icon-dog',
        'htmlOptions' => array('class'=>'bootstrap-widget-table'),
        'id'=>'Female-'.$class.'-section',
        'headerButtons' => array(
            array(
                'class' => 'bootstrap.widgets.TbButton',
                'label' =>Yii::t('model','add'),
                'type' => 'primary',
                'id'=>'new_Female'.$class,
                'htmlOptions' => array(
                  //  'onclick' => 'MeasurementActivity.addNcbType()'
                    )
                ),
            )
        ));?>
        <table>
            <tr>
                <th>Place</th>
                <th>Dog</th>
                <th>Ranking</th>
                <th>Titul</th>
                <th></th>
            </tr>
            <?php 
                foreach ($model->exhibitionClasses as $k=>$m){
                    if ($m->class == $key){
                        echo '<tr>';                  
                        echo '<td>'.CHtml::numberField('Class'.$key.'_Place['.$k.']', $m->place, array('class'=>'place_input')).'</td>'; 
                        echo '<td>'.CHtml::dropDownList('Class'.$key.'_Dog['.$k.']', $m->id_dog, Dog::model()->femaleList, array()).'</td>'; 
                        echo '<td>'.CHtml::textField('Class'.$key.'_Ranking['.$k.']', $m->ranking, array('size'=>60,'maxlength'=>200)).'</td>'; 
                        echo '<td>'.CHtml::textField('Class'.$key.'_Titul['.$k.']', $m->titul, array('size'=>60,'maxlength'=>200)).'</td>'; 
                        echo '<td class="delete"></td>';
                        echo '</tr>';
                    }
                }
            ?>
            <tr class="hidden row-template">              
                <td>
                    <?php echo CHtml::numberField('Class'.$key.'_Place[XCounter]', NULL, array('class'=>'place_input')); ?>
                </td>
                <td>
                    <?php echo CHtml::dropDownList('Class'.$key.'_Dog[XCounter]',NULL ,Dog::model()->femaleList, array()); ?>
                </td>
                <td>
                    <?php echo CHtml::textField('Class'.$key.'_Ranking[XCounter]', NULL, array('size'=>60,'maxlength'=>200)); ?>
                </td>
                <td>
                    <?php echo CHtml::textField('Class'.$key.'_Titul[XCounter]', NULL, array('size'=>60,'maxlength'=>200)); ?>
                </td>
                <td class="delete"></td>
            </tr>
        </table>
   <?php     
   $this->endWidget();
   
   Yii::app()->clientScript->registerScript($class."-female", 
    "var ExhibitionCreate".$key."Female = new ExhibitionForm({
        table_elem : $('#Female-".$class."-section'),
        form_elem : $('#exhibition-form'), 
        button_add : $('#new_Female".$class."'),
        })", 
    CClientScript::POS_END
    );  
}

