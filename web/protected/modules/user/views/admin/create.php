<?php
$this->breadcrumbs=array(
	UserModule::t('Users')=>array('admin'),
	UserModule::t('Create'),
);

$this->menu=array(
    array('label'=>UserModule::t('Manage Users'), 'url'=>array('admin'),'visible'=>RightsHelper::can("User.Admin.*")),
    array('label'=>UserModule::t('Manage Profile Field'), 'url'=>array('profileField/admin'),'visible'=>RightsHelper::can("User.Admin.*")),
    array('label'=>UserModule::t('List User'), 'url'=>array('/user'),'visible'=>RightsHelper::can("User.Admin.*")),
);
?>
<h1><?php echo UserModule::t("Create User"); ?></h1>

<?php
	echo $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile));
?>