<?php
$this->breadcrumbs=array(
	UserModule::t('Users')=>array('admin'),
	UserModule::t('Create'),
);

$this->menu=array(
    array('label'=>Yii::t('model','user.admin'), 'url'=>array('admin'),'visible'=>RightsHelper::can("User.Admin.*")),
    //array('label'=>UserModule::t('Manage Profile Field'), 'url'=>array('profileField/admin'),'visible'=>RightsHelper::can("User.Admin.*")),
    array('label'=>Yii::t('model','user.list'), 'url'=>array('/user'),'visible'=>RightsHelper::can("User.Admin.*")),
);
?>
<h1><?php echo Yii::t("model","user.create"); ?></h1>

<?php
	echo $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile));
?>