<?php
    $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' =>'Youth Presnetation Dog',
        'headerIcon' => 'icon-dog',
        'htmlOptions' => array('class'=>'bootstrap-widget-table'),
        'id'=>'youth-presentation-dog-section',
        'headerButtons' => array(
            array(
                'class' => 'bootstrap.widgets.TbButton',
                'label' =>Yii::t('model','add'),
                'type' => 'primary',
                'id'=>'new_YouthPresentationDog',
                'htmlOptions' => array(
                  //  'onclick' => 'MeasurementActivity.addNcbType()'
                    )
                ),
            )
        ));?>
        <table class="tabb" style="vertical-align: top">
            <tr>
                <th>Dog</th>
                <th>Evaluation</th>
                <th>Assessment</th>
                <th>X</th>
            </tr>
            <?php 
                foreach ($model->youthPresentationDogs as $key=>$m){
                    echo '<tr>';
                    echo '<td>'.CHtml::dropDownList('YouthPresentationDog_Dog['.$key.']', $m->id_dog, Dog::model()->list, array()).'</td>';
                    echo '<td>'.CHtml::textField('YouthPresentationDog_Evaluation['.$key.']', $m->evaluation, NULL, array()).'</td>';
                    echo '<td>'.CHtml::textField('YouthPresentationDog_Assessment['.$key.']', $m->assessment, NULL, array()).'</td>';
                    echo '<td class="delete"></td>';
                    echo '</tr>';
                }
            ?>
            <tr class="hidden row-template">
                <td>
                    <?php echo CHtml::dropDownList('YouthPresentationDog_Dog[XCounter]',NULL ,Dog::model()->list, array()); ?>
                </td>
                <td>
                    <?php echo CHtml::textField('YouthPresentationDog_Evaluation[XCounter]',NULL ,NULL, array('size'=>60,'maxlength'=>100)); ?>
                </td>
                <td>
                    <?php echo CHtml::textField('YouthPresentationDog_Assessment[XCounter]',NULL ,NULL, array('size'=>60,'maxlength'=>100)); ?>
                </td>
                <td class="delete"></td>
            </tr>
        </table>
   <?php     
   $this->endWidget();
   
   Yii::app()->clientScript->registerScript('YouthPresentation', 
    "var YouthPresentationCreate = new ExhibitionForm({
        table_elem : $('#youth-presentation-dog-section'),
        form_elem : $('#bonitation-and-youth-presentation-form'), 
        button_add : $('#new_YouthPresentationDog'),
        })", 
    CClientScript::POS_END
    );


