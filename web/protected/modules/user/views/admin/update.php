<?php
$this->breadcrumbs=array(
	(UserModule::t('Users'))=>array('admin'),
	$model->username=>array('view','id'=>$model->id),
	(UserModule::t('Update')),
);
$this->menu=array(
    array('label'=>Yii::t('model','user.create'), 'url'=>array('create')),
    array('label'=>Yii::t('model','user.update'), 'url'=>array('view','id'=>$model->id)),
    array('label'=>Yii::t('model','user.admin'), 'url'=>array('admin')),
 //  array('label'=>UserModule::t('Manage Profile Field'), 'url'=>array('profileField/admin')),
    array('label'=>Yii::t('model','user.list'), 'url'=>array('/user')),
);
?>

<h1><?php echo  UserModule::t('Update User')." ".$model->id; ?></h1>

<?php
	echo $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile));
?>