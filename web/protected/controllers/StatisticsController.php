<?php

class StatisticsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','list'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Exhibition;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Exhibition']))
		{
			$model->attributes=$_POST['Exhibition'];                     
                        $model->setDogChildParameters($_POST['ChildDog_Dog'],$_POST['ChildDog_Child'],$_POST['ChildDog_Place']);
                        $model->setDogCoupleParameters($_POST['DogCouple_Dog1'],$_POST['DogCouple_Dog2'],$_POST['DogCouple_Place']);
                        $model->setBestKennelParameters($_POST['BestKennel_Kennel'],$_POST['BestKennel_Place']);
                        
                        $classes = Dog::model()->getExhibitionClasses();
                        foreach ($classes as $key => $class)
                            $model->setDogClassParameters($key, $_POST['Class'.$key.'_Dog'],$_POST['Class'.$key.'_Ranking'],$_POST['Class'.$key.'_Titul'],$_POST['Class'.$key.'_Place']);
                        
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Exhibition']))
		{
			$model->attributes=$_POST['Exhibition'];
                        $model->setDogChildParameters($_POST['ChildDog_Dog'],$_POST['ChildDog_Child'],$_POST['ChildDog_Place']);
                        $model->setDogCoupleParameters($_POST['DogCouple_Dog1'],$_POST['DogCouple_Dog2'],$_POST['DogCouple_Place']);
                        $model->setBestKennelParameters($_POST['BestKennel_Kennel'],$_POST['BestKennel_Place']);
                        
                        $classes = Dog::model()->getExhibitionClasses();
                        foreach ($classes as $key => $class)
                            $model->setDogClassParameters($key, $_POST['Class'.$key.'_Dog'],$_POST['Class'.$key.'_Ranking'],$_POST['Class'.$key.'_Titul'],$_POST['Class'.$key.'_Place']);
                        
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
                
		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
              //  $model=new Exhibition('searchIndex');
	//	$model->unsetAttributes();  // clear any default values
	//	if(isset($_GET['Exhibition']))
	//		$model->attributes=$_GET['Exhibition'];
                
		$this->render('index',array(
          //              'model'=>$model,
		));
	}

        public function actionList(){
                $dataProvider=new CActiveDataProvider('Exhibition');
		$this->render('list',array(
			'dataProvider'=>$dataProvider,
		));
        }
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Exhibition('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Exhibition']))
			$model->attributes=$_GET['Exhibition'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Exhibition the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Exhibition::model()->with('exhibitionChildDogs','exhibitionDogCouples','exhibitionClasses','exhibitionBestKennels')->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Exhibition $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='exhibition-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
