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
    
    const ENDURANCERUN_SVP1 = 1;
    const ENDURANCERUN_SVP2 = 2;
    const ENDURANCERUN_SVP3 = 3;
    
    const BONITATIONDOG_SUCHY = 0;
    const BONITATIONDOG_PEVNY = 1;
    const BONITATIONDOG_JEMNY = 2;
    const BONITATIONDOG_LYMFATICKY = 3;
    
    const BONITATIONDOG_VYBORNY = 0;
    const BONITATIONDOG_VELMIDOBRY = 1;
    const BONITATIONDOG_DOBRY = 2;
    const BONITATIONDOG_NEDOSTATOCNY = 3;
    
    public function getStateList(){
        return array(
            self::STATE_ACTIVE=>"Aktívny",
            self::STATE_INACTIVE=>"Neaktívny",
        );
    }
    
    public function getYesNoList(){
        return array(
            self::NO=>"No",
            self::YES=>"Yes",
        );
    }
    
    public function getSexList(){
        return array(
            self::MALE=>"Pes",
            self::FEMALE=>"Suka",
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
    public function getUserList(){
        $models = $this->findAll(array('order' => 'username'));
        return CHtml::listData($models, 'id', 'username');
    }
    
    public function getFertilisationList(){
        $models = $this->findAll(array('order' => 'fertilisation_date'));
        return CHtml::listData($models, 'id', 'fertilisation_date');
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
    
    public function getSVPList(){
        return array(
            self::ENDURANCERUN_SVP1 => 'SVP1',
            self::ENDURANCERUN_SVP2 => 'SVP2',
            self::ENDURANCERUN_SVP3 => 'SVP3'
        );
    }
    
    public function getBonitationDogType(){
        return array(
            self::BONITATIONDOG_SUCHY => 'Suchý',
            self::BONITATIONDOG_PEVNY => 'Pevný',
            self::BONITATIONDOG_JEMNY => 'Jemný',
            self::BONITATIONDOG_LYMFATICKY => 'Lymfatický',
        );
    }
    
    public function getBonitationDogHarmony(){
        return array(
            self::BONITATIONDOG_VYBORNY => 'Výborný',
            self::BONITATIONDOG_VELMIDOBRY => 'Veľmi dobrý',
            self::BONITATIONDOG_DOBRY => 'Dobrý',
            self::BONITATIONDOG_NEDOSTATOCNY => 'Nedostatočný',
        );
    }
    
    
     
    
    public function getStateLabel($state=NULL){
        if($state === NULL && isset($this->state)){
            $state = $this->state;
        }
        return $this->getOneAttributeLabel("state".$state);
    }
    
 
}
