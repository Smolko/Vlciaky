<?php

  $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' =>"Chyby",
        'headerIcon' => 'icon-cog',
        'htmlOptions' => array('class'=>'bootstrap-widget-table'),
        'id'=>'activity-param-section',
        'headerButtons' => array(
            array(
                'class' => 'bootstrap.widgets.TbButton',
                'label' =>Yii::t('model','exhibition.newdogchil'),
                'type' => 'primary',
                'id'=>'new_dog',
                'htmlOptions' => array(
                  //  'onclick' => 'MeasurementActivity.addNcbType()'
                    )
                ),
            )
        ));?>
        <table>
            <tr class="hidden row-template">
                <td>
	<?php
           echo CHtml::label("Dog", "dog_counter", array ( ));
           echo CHtml::dropDownList('Dog[counter]',NULL ,Dog::model()->list, array('class' => 'span5', 'maxlength' => 6));
           echo CHtml::label("Child", "child_counter", array ( ));
           echo CHtml::textField('Child[counter]', NULL, array('class' => 'span5', 'maxlength' => 6));
     
	 ?>
                </td>
            </tr>
        </table>
   <?php     $this->endWidget();

