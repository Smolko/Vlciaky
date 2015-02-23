<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div class="span-6">
        <p>
        <h2>Sidebar</h2>
        <?php
        $this->widget('bootstrap.widgets.TbMenu', array(
            'type' => 'list',
            'items' => array(
                array('label' => 'Home', 'url' => array('/site/index')),
                array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                array('label' => 'Contact', 'url' => array('/site/contact')),
                array('label' => 'Kennel', 'url' => array('/kennel')),
                array('label' => 'Bonitation', 'url' => array('/bonitation')),
                array('label' => 'Dog', 'url' => array('/dog')),
                array('label' => 'Endurance run', 'url' => array('/endurancerun')),
                array('label' => 'Fertilisation', 'url' => array('/fertilisation')),
                array('label' => 'Health', 'url' => array('/health')),
                array('label' => 'Kennel', 'url' => array('/kennel')),
                array('label' => 'Youth presentation', 'url' => array('/youthpresentation')),
                array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
            ),
        ));
        ?>
        </p>

    </div>
    <div id="content" class="span-16">
        <?php echo $content; ?>
    </div><!-- content -->
</div>
<?php $this->endContent(); ?>
