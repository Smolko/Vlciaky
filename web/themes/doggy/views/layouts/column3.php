<?php $this->beginContent('//layouts/main'); ?>
<div class="span-5 first">
        <div id="left-sidebar">
        <?php
                $this->beginWidget('zii.widgets.CPortlet', array(
                        'title'=>'Operations',
                ));
                $this->widget('zii.widgets.CMenu', array(
                        'items'=>$this->menu,
                        'htmlOptions'=>array('class'=>'operations'),
                ));
                $this->endWidget();
        ?>
        </div><!-- left-sidebar -->
</div>
<div class="span-14">
        <div id="content">
                <?php echo $content; ?>
        </div><!-- content -->
</div>
<div class="span-5 last">
        <div id="right-sidebar">
                your search stuff goes here
        </div><!-- right-sidebar -->
</div>
<?php $this->endContent(); ?>