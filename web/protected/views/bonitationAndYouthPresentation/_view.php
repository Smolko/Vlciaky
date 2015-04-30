<?php
/* @var $this BonitationAndYouthPresentationController */
/* @var $data BonitationAndYouthPresentation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('youth_presentation_male_count')); ?>:</b>
	<?php echo CHtml::encode($data->youth_presenation_male_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('youth_presentation_female_count')); ?>:</b>
	<?php echo CHtml::encode($data->youth_presenation_female_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonitation_male_count')); ?>:</b>
	<?php echo CHtml::encode($data->bonitation_male_count); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bonitation_female_count')); ?>:</b>
	<?php echo CHtml::encode($data->bonitation_female_count); ?>
	<br />

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