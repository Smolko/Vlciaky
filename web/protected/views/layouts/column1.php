<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="myspan-center1"> <!-- class="span-19" -->
    <div id="content">
        <?php echo $content; ?>
    </div><!-- content -->
</div>
<div class="myspan-last1"> <!-- class="span-5 last" -->
    <div id="sidebar1">
        <p style="text-align: center; font-size: 20px;">Stav databázy</p>
        <br><strong>Zapísaných jedincov:</strong> <?php echo Dog::model()->getDogCount(); ?>
        <br><strong>Počet chovateľských staníc:</strong> <?php echo Kennel::model()->getKennelCount(); ?>
        <br><strong>Počet majiteľov a spolumajiteľov:</strong> <?php echo "???" ?>
    </div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>