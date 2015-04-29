<?php
/**
 * Description of RightsHelper
 *
 * @author Lukas Gamrat
 */
class RightsHelper {
    
    const ROLE_ADMIN = 'Admin';
    const ROLE_REP = 'Rep';
    const ROLE_AUTHENTICATED = 'Authenticated';
    const ROLE_GUEST = 'Guest';

    private static $_signed_in_user = NULL;
    private static $_signed_in_user_roles = NULL;
    
    /* 
     * Check if given auth item is assigned to given user
     * @param string - $item - auth item name
     * @param integer - user ID
     * @return boolean
     */
    public static function isAssigned($item, $user_id){
        $auth=Yii::app()->authManager;
        return $auth->isAssigned($item, $user_id);
    }
    
    // important for tests
    public static function resetLoggedInUserModel(){
        self::$_signed_in_user = NULL;
    }
    
    public static function getLoggedInUserModel(){
        if(self::$_signed_in_user !== NULL) return self::$_signed_in_user;
        // this can be done by convention in UserBasic model
        $class = Yii::app()->user->getState('user_type');
        if(strlen($class)){
            $model = new $class(null);
            self::$_signed_in_user = $model->findByPk(Yii::app()->user->id);
        }
        return self::$_signed_in_user;
    }
    
    public static function getEtoAllowed(){
        $user = self::getLoggedInUserModel();
        if($user !== NULL){
            return $user->etoAllowed;
        }
        return true;
    }
    
    public static function getSpAllowed(){
        $user = self::getLoggedInUserModel();
        if($user !== NULL){
            return $user->spAllowed;
        }
        return true;
    }


    public static function getLoggedInUserRoles(){
        if(self::$_signed_in_user_roles === NULL){
            self::$_signed_in_user_roles = Yii::app()->authManager->getAuthItems(2, Yii::app()->user->id);
        }
        return self::$_signed_in_user_roles;
    }
    
    
    public static function isAdmin(){
        $userType = Yii::app()->user->getState('user_type');
        return ($userType == UserBasic::USER_TYPE_ADMIN);
    }
    
    public static function isRep(){
        $userType = Yii::app()->user->getState('user_type');
        return ($userType == UserBasic::USER_TYPE_REP);
    }
    
        
    public static function isSuperuser(){
        return !!Yii::app()->getModule('user')->isAdmin();
    }
    
    // check if user is allowed to perform given actions
    public static function can($actions, $all = true){
        if(self::isSuperuser()){
            return true;
        }

        $can = $all;
        if(!is_array($actions)){
            $actions = array($actions);
        }
        
        foreach($actions as $action){
            
            if($all){
                $can = $can && self::checkAccess($action);
            }
            else{
                $can = $can || self::checkAccess($action);
            }
        }
        return $can;
    }
    
    public static function canAll($actions){
        return self::can($actions, true);
    }
    
    public static function canOne($actions){
        return self::can($actions, false);
    }
    
    private static function checkAccess($action){
        if(strpos($action, ".")){
            $baseAction = explode(".", $action);
            if (Yii::app()->user->checkAccess($baseAction[0] . '.*')){
                return true;
            }
        }
        return Yii::app()->user->checkAccess($action);
    }
    
    /*private static function checkModuleAccess($module){
        $user = self::getLoggedInUserModel();
        if($user !== NULL){
            if(strtolower($module) == 'specialprice'){
                if(!$user->spAllowed) return false;
            }
            elseif(!$user->etoAllowed){
                return false;
            }
        }
        return true;
    }*/
    
    public static function blockPriceDisplay(){
        if(!RightsHelper::isRep()){
            return false;
        }
        $rep = self::getLoggedInUserModel();
        return intval($rep->data->block_price)===1;
    }
    
}

