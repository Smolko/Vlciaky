<?php 
if (isset($_GET['lang'])){
    $lang = $_GET['lang'];
    Yii::app()->session['lang'] = $lang;
}
if (isset(Yii::app()->session['lang'])){
    Yii::app()->setLanguage(Yii::app()->session['lang']);
} 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />


        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/myStyle.css" />


        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <div class="container" id="page">
            <div id="header">
                <img id="logo" src="images/logo.png" height="10"></img>
                <div id="imageCSV">
                    <img id="imageCSV_off" src="images/csv_c.jpg" height="10"></img>  
                    <img id="imageCSV_on" src="images/csv_o.jpg" height="10"></img> 
                </div>
                <div id="title">
                    <p>Klub chovateľov československého vlčiaka SR</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Databáza jedincov Slovenskej republiky</p>
                </div>
            </div><!-- header -->

            <div id="mainmenu">
                <?php
                $this->widget('bootstrap.widgets.TbMenu', array(
                    'items' => array(
                        array('label' => Yii::t("menu","Home"), 'url' => array('/site/index')), 
                        array('label' => Yii::t("menu","Dogs"), 'url' => array('/dog')),
                        array('label' => Yii::t("menu","Kennels"), 'url' => array('/kennel')),
                        array('label' => Yii::t("menu","Exhibitions"), 'url' => array('/exhibition')),                                           
                        array('label' => Yii::t("menu","Endurance runs"), 'url' => array('/enduranceRun')),
                        array('label' => Yii::t("menu","Bonitations and Youth presentations"), 'url' => array('/bonitationAndYouthPresentation')), 
                        array('label' => 'Fertilisation', 'url' => array('/fertilisation')),
                        //array('label' => '', 'url'=>'#', 'active'=> false),
                        array('label' => Yii::t("menu","Other")),
                        array('label' => Yii::t("menu","About"), 'url' => array('/site/page', 'view' => 'about')),
                        array('label' => Yii::t("menu","Contact"), 'url' => array('/site/contact')),
                    //array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                    //array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ));
                /*
                  $this->widget('bootstrap.widgets.TbMenu', array(
                  'items' => array(
                  array('label' => 'Hlavné menu', 'url' => array('/site/index')),
                  array('label' => 'Posledné pridané', 'url' => array('/site/page', 'view' => 'about')),
                  array('label' => 'Výsledky klubových výstav', 'url' => array('/site/contact')),
                  array('label' => 'Výsledky SVP', 'url' => array('/kennel')),
                  array('label' => 'Výsledky zvodu a bonitacií', 'url' => array('/bonitation')),
                  array('label' => 'Vyhladávanie jedincov', 'url' => array('/dog')),
                  array('label' => 'Chovatelské stanice', 'url' => array('/endurancerun')),
                  array('label' => 'Štatistiky', 'url' => array('/fertilisation')),
                  array('label' => 'Chovatelský plán', 'url' => array('/health')),
                  array('label' => 'Plemenná kniha', 'url' => array('/kennel')),
                  array('label' => 'Členovia klubu', 'url' => array('/youthpresentation')),
                  array('label' => 'Admin menu', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                  array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                  ),
                  )); */
                ?>

            </div><!-- mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <div id="login">
                <?php
                $this->widget('bootstrap.widgets.TbMenu', array(
                    'type' => 'tabs',
                    'items' => array(
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => Yii::app()->user->name, 'url' => array('#'), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => 'Logout', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ));
                ?>
            </div>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->
        </div><!-- page -->

    </body>
</html>
