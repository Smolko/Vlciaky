<?php
    $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' =>'Bonitation Dog',
        'headerIcon' => 'icon-dog',
        'htmlOptions' => array('class'=>'bootstrap-widget-table'),
        'id'=>'bonitation-dog-section',
        'headerButtons' => array(
            array(
                'class' => 'bootstrap.widgets.TbButton',
                'label' =>Yii::t('model','add'),
                'type' => 'primary',
                'id'=>'new_BonitationDog',
                'htmlOptions' => array(
                  //  'onclick' => 'MeasurementActivity.addNcbType()'
                    )
                ),
            )
        ));?>
<style>
    .tabb > tbody > tr > td {
        vertical-align: top;
    }
    
    .row2 > div {
        width:200px; 
        float: left;
    }
</style>
        <table class="tabb" style="vertical-align: top">
            <tr>
                <th>Dog</th>
                <th>Evaluation</th>
                <th>More</th>
                <th>X</th>
            </tr>
            <?php 
                foreach ($model->bonitationDogs as $key=>$m){
                    echo '<tr>';
                    echo '<td>'.CHtml::dropDownList('BonitationDog_Dog['.$key.']', $m->id_dog, Dog::model()->list, array()).'</td>';
                    echo '<td>'.CHtml::textField('BonitationDog_Evaluation['.$key.']', $m->evaluation, NULL, array()).'</td>';
                    echo '<td><button type="button" onclick="$(this).parent().parent().next().toggle()">@</button></td>';
                    echo '<td class="delete"></td>';
                    echo '</tr>';
                    
                    echo '<tr hidden><td colspan="4">';
                    echo '<div class="row2">'.
                            '<div>BonitationCode</div>'.
                            CHtml::textField('BonitationDog_BonitationCode['.$key.']', $m->bonitation_code, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Temperament</div>'.
                            CHtml::textField('BonitationDog_Temperament['.$key.']', $m->temperament, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Type</div>'.
                            CHtml::textField('BonitationDog_Type['.$key.']', $m->type, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Harmony</div>'.
                            CHtml::dropDownList('BonitationDog_Harmony['.$key.']', $m->harmony, BonitationDog::model()->getBonitationDogHarmony(), array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Head length</div>'.
                            CHtml::numberField('BonitationDog_HeadLength['.$key.']', $m->head_length, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Head width</div>'.
                            CHtml::numberField('BonitationDog_HeadWidth['.$key.']', $m->head_width, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Snout length</div>'.
                            CHtml::numberField('BonitationDog_SnoutLength['.$key.']', $m->snout_length, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Ear length</div>'.
                            CHtml::numberField('BonitationDog_EarLength['.$key.']', $m->ear_length, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Oblique length</div>'.
                            CHtml::numberField('BonitationDog_ObliqueLength['.$key.']', $m->oblique_length, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Chest depth</div>'.
                            CHtml::numberField('BonitationDog_ChestDepth['.$key.']', $m->chest_depth, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Chest circle</div>'.
                            CHtml::numberField('BonitationDog_ChestCircle['.$key.']', $m->chest_circle, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Front leg length</div>'.
                            CHtml::numberField('BonitationDog_FrontLegLength['.$key.']', $m->front_leg_length, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Thigh length</div>'.
                            CHtml::numberField('BonitationDog_ThighLength['.$key.']', $m->thigh_length, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Patern length</div>'.
                            CHtml::numberField('BonitationDog_PasternLength['.$key.']', $m->pastern_length, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Patern circle</div>'.
                            CHtml::numberField('BonitationDog_PasternCircle['.$key.']', $m->pastern_circle, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Tarsus length</div>'.
                            CHtml::numberField('BonitationDog_TarsusLength['.$key.']', $m->tarsus_length, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Tibia length</div>'.
                            CHtml::numberField('BonitationDog_TibiaLength['.$key.']', $m->tibia_length, NULL, array()).
                         '</div>';
                    echo '<div class="row2">'.
                            '<div>Comment</div>'.
                            CHtml::textField('BonitationDog_Comment['.$key.']', $m->comment, NULL, array()).
                         '</div>';     
                    echo '</td></tr>';
                }
            ?>
            <tr class="hidden row-template">
                <td>
                    <?php echo CHtml::dropDownList('BonitationDog_Dog[XCounter]',NULL ,Dog::model()->list, array()); ?>
                </td>
                <td>
                    <?php echo CHtml::textField('BonitationDog_Evaluation[XCounter]',NULL ,NULL, array('size'=>60,'maxlength'=>100)); ?>
                </td>
                <td>
                    <button type="button" onclick="$(this).parent().parent().next().toggle()">@</button>
                </td>
                <td class="delete"></td>
            </tr>
            <tr hidden class="row-template2">
                <td colspan="4">
                    <div class="row2">
                        <div>
                            Bonitation Code
                        </div>
                        <?php echo CHtml::textField('BonitationDog_BonitationCode[XCounter]',NULL ,NULL, array('size'=>60,'maxlength'=>100)); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Temperament
                        </div>
                        <?php echo CHtml::textField('BonitationDog_Temperament[XCounter]',NULL ,NULL, array('size'=>50,'maxlength'=>50)); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Type
                        </div>
                        <?php echo CHtml::textField('BonitationDog_Type[XCounter]',NULL ,NULL, array('size'=>50,'maxlength'=>50)); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Harmony
                        </div>
                        <?php echo CHtml::dropDownList('BonitationDog_Harmony[XCounter]',NULL ,BonitationDog::model()->getBonitationDogHarmony(), array()); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Head length
                        </div>
                        <?php echo CHtml::numberField('BonitationDog_HeadLength[XCounter]',NULL ,NULL, array()); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Head width
                        </div>
                        <?php echo CHtml::numberField('BonitationDog_HeadWidth[XCounter]',NULL ,NULL, array()); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Snout length
                        </div>
                        <?php echo CHtml::numberField('BonitationDog_SnoutLength[XCounter]',NULL ,NULL, array()); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Ear length
                        </div>
                        <?php echo CHtml::numberField('BonitationDog_EarLength[XCounter]',NULL ,NULL, array()); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Oblique length
                        </div>
                        <?php echo CHtml::numberField('BonitationDog_ObliqueLength[XCounter]',NULL ,NULL, array()); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Chest depth
                        </div>
                        <?php echo CHtml::numberField('BonitationDog_ChestDepth[XCounter]',NULL ,NULL, array()); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Chest circle
                        </div>
                        <?php echo CHtml::numberField('BonitationDog_ChestCircle[XCounter]',NULL ,NULL, array()); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Front leg length
                        </div>
                        <?php echo CHtml::numberField('BonitationDog_FrontLegLength[XCounter]',NULL ,NULL, array()); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Thigh length
                        </div>
                        <?php echo CHtml::numberField('BonitationDog_ThighLength[XCounter]',NULL ,NULL, array()); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Pastern length
                        </div>
                        <?php echo CHtml::numberField('BonitationDog_PasternLength[XCounter]',NULL ,NULL, array()); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Pastern circle
                        </div>
                        <?php echo CHtml::numberField('BonitationDog_PasternCircle[XCounter]',NULL ,NULL, array()); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Tarsus length
                        </div>
                        <?php echo CHtml::numberField('BonitationDog_TarsusLength[XCounter]',NULL ,NULL, array()); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Tibia length
                        </div>
                        <?php echo CHtml::numberField('BonitationDog_TibiaLength[XCounter]',NULL ,NULL, array()); ?>                      
                    </div>
                    <div class="row2">
                        <div>
                            Comment
                        </div>
                        <?php echo CHtml::textField('BonitationDog_Comment[XCounter]',NULL ,NULL, array()); ?>                      
                    </div>
                </td>
            </tr>
        </table>
   <?php     
   $this->endWidget();
   
   Yii::app()->clientScript->registerScript('Bonitation', 
    "var BonitationCreate = new ExhibitionForm({
        table_elem : $('#bonitation-dog-section'),
        form_elem : $('#bonitation-and-youth-presentation-form'), 
        button_add : $('#new_BonitationDog'),
        })", 
    CClientScript::POS_END
    );


