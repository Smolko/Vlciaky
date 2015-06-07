<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyWidget
 *
 * @author Michal
 */
class AdvertDisplayWidget extends CTabView {

    public $position = NULL;
    public $limit = NULL;
    public $adverts = array();

    public function init() {
        $this->adverts = AdAdvert::model()
                ->active()
                ->forUserParams()
                ->limit(intval($this->limit))
                ->findAllByAttributes(array("display_position"=>$this->position));
    }

    public function run() {
        foreach ($this->adverts as $advert) {
            if($advert->canDisplay()){
                $displayID=$this->saveDisplay($advert);
                $this->createAdvert($advert,$displayID);
            }
        }
    }

    private function saveDisplay($advert) {
        $display = new AdDisplay();
        
        $display->advert_id = $advert->id;
        if (isset(Yii::app()->user->id)) {
            $display->user_id = Yii::app()->user->id;
        }
        $display->display_time = date("Y-m-d H:i:s");
        $display->save();
        
        $advert->display_count++;
        $advert->save(false, array("display_count"));
        return $display->id;
    }

    private function createAdvert($advert,$displayID) {
        $href = "href='" . Yii::app()->createUrl("/advert/adDisplay/refer", array("url" => urlencode($advert->url),"id"=> $displayID)) . "'";
        $image = "<img src='" . $advert->path . "' alt='".$advert->description."' />";
        if (is_null($advert->url)) {
            $href = NULL;
        }
        if (is_null($advert->path)) {
            $image = $advert->description;
        }
        echo "<a " . $href . "' target='_blank'>" . $image . " </a>";
    }

}