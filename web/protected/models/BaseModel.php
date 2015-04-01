<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseModel
 *
 * @author Michal
 */
class BaseModel extends CActiveRecord{
    const STATE_ACTIVE = 1;
    const STATE_INACTIVE = 0;
    const STATE_DELETED = -1;
    
    const MALE=1;
    const FEMALE=0;
    
    const YES=1;
    const NO=0;
    
    const EXHIBITIONCLASS_MALE_TRIEDASTENIAT = 0;
    const EXHIBITIONCLASS_MALE_TRIEDADORASTU = 1;
    const EXHIBITIONCLASS_MALE_TRIEDAMLADYCH = 2;
    const EXHIBITIONCLASS_MALE_TRIEDAOTVORENA = 3;
    const EXHIBITIONCLASS_MALE_TRIEDAPRACOVNA = 4;
    const EXHIBITIONCLASS_MALE_TRIEDAVITAZOV = 5;
    const EXHIBITIONCLASS_MALE_TRIEDASAMPIONOV = 6;
    const EXHIBITIONCLASS_MALE_TRIEDAVETERANOV = 7;
    const EXHIBITIONCLASS_MALE_TRIEDACESTNA = 8;
    
    public function getStateList(){
        return array(
            self::STATE_ACTIVE=>"Active",
            self::STATE_INACTIVE=>"Inactive",
        );
    }
    
    public function getYesNoList(){
        return array(
            self::YES=>"Yes",
            self::NO=>"No",
        );
    }
    
    public function getSexList(){
        return array(
            self::MALE=>"Male",
            self::FEMALE=>"Female",
        );
    }
    
   protected function generateAttributeLabels($valuesToTransalte){
        $return = array();
        foreach($valuesToTransalte as $valueToTranslate){
            $return[$valueToTranslate] = $this->getOneAttributeLabel($valueToTranslate);
        }
        return $return;
    }
    
    protected function getOneAttributeLabel($valueToTranslate){
        return Yii::t('model', strtolower(get_class($this)).".".$valueToTranslate);
    }
    
    public function getList(){
        $models = $this->findAll(array('order' => 'name'));
        return CHtml::listData($models, 'id', 'name');
    }
    
    public function getExhibitionClasses(){
        return array(
            self::EXHIBITIONCLASS_MALE_TRIEDASTENIAT => "Trieda_šteniat",
            self::EXHIBITIONCLASS_MALE_TRIEDADORASTU => "Trieda_dorastu",
            self::EXHIBITIONCLASS_MALE_TRIEDAMLADYCH => "Trieda_mladých",
            self::EXHIBITIONCLASS_MALE_TRIEDAOTVORENA => "Trieda_otvorená",
            self::EXHIBITIONCLASS_MALE_TRIEDAPRACOVNA => "Trieda_pracovná",
            self::EXHIBITIONCLASS_MALE_TRIEDAVITAZOV => "Trieda_víťazov",
            self::EXHIBITIONCLASS_MALE_TRIEDASAMPIONOV => "Trieda_šampiónov",
            self::EXHIBITIONCLASS_MALE_TRIEDAVETERANOV => "Trieda_veteránov",
            self::EXHIBITIONCLASS_MALE_TRIEDACESTNA => "Trieda_čestná"        
        );
    }
    
}
