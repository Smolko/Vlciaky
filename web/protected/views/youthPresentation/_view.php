<?php
/* @var $this YouthPresentationController */
/* @var $data YouthPresentation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assessment')); ?>:</b>
	<?php echo CHtml::encode($data->assessment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evaluation')); ?>:</b>
	<?php echo CHtml::encode($data->evaluation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('youth_presentation_date')); ?>:</b>
	<?php echo CHtml::encode($data->youth_presentation_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('youth_presentation_place')); ?>:</b>
	<?php echo CHtml::encode($data->youth_presentation_place); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referee')); ?>:</b>
	<?php echo CHtml::encode($data->referee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dog')); ?>:</b>
	<?php echo CHtml::encode($data->id_dog); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	*/ ?>

</div>