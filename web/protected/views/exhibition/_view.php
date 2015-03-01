<?php
/* @var $this ExhibitionController */
/* @var $data Exhibition */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place')); ?>:</b>
	<?php echo CHtml::encode($data->place); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referee')); ?>:</b>
	<?php echo CHtml::encode($data->referee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('count_male')); ?>:</b>
	<?php echo CHtml::encode($data->count_male); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('count_female')); ?>:</b>
	<?php echo CHtml::encode($data->count_female); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('count_all')); ?>:</b>
	<?php echo CHtml::encode($data->count_all); ?>
	<br />

	*/ ?>

</div>