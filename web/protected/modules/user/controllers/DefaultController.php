<?php

class DefaultController extends Controller
{
	
	 public function actions(){
                return array(
                    'suggest'=>array(
                        'class'=>'application.extensions.custom.EAutoCompleteAction',
                        'model'=>'Institution',
                        'attribute'=>'CONCAT(city," ",street," ",name)',
                        'scopes' => array(),
                        'response' => array(
                            'id' => 'id',
                            'label' => 'fullDisplay',
                        ),
                    ),
                );
        }
        
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('User', array(
			'criteria'=>array(
		        'condition'=>'status>'.User::STATUS_BANNED,
		    ),
			'pagination'=>array(
				'pageSize'=>Yii::app()->controller->module->user_page_size,
			),
		));

		$this->render('/user/index',array(
			'dataProvider'=>$dataProvider,
		));
	}

}