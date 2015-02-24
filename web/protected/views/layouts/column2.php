<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="myspan-center2"> <!-- class="span-19" -->
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="myspan-last2"> <!-- class="span-5 last" -->
	<div id="sidebar2">
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
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>