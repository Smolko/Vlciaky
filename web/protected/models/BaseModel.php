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
    
    public function getStateList(){
        return array(
            self::STATE_ACTIVE=>"Aktivny",
            self::STATE_INACTIVE=>"Neaktivny",
        );
    }
    
    public function getSexList(){
        return array(
            self::MALE=>"Male",
            self::FEMALE=>"Female",
        );
    }
}
