<?php
/* @var $this DogController */
/* @var $data Dog */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birthday')); ?>:</b>
	<?php echo CHtml::encode($data->birthday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deathday')); ?>:</b>
	<?php echo CHtml::encode($data->deathday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('death_cause')); ?>:</b>
	<?php echo CHtml::encode($data->death_cause); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('breed')); ?>:</b>
	<?php echo CHtml::encode($data->breed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('old_regnumber')); ?>:</b>
	<?php echo CHtml::encode($data->old_regnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('new_regnumber')); ?>:</b>
	<?php echo CHtml::encode($data->new_regnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tattoo')); ?>:</b>
	<?php echo CHtml::encode($data->tattoo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chip')); ?>:</b>
	<?php echo CHtml::encode($data->chip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('export_import')); ?>:</b>
	<?php echo CHtml::encode($data->export_import); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('breeding')); ?>:</b>
	<?php echo CHtml::encode($data->breeding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_health')); ?>:</b>
	<?php echo CHtml::encode($data->id_health); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_fertilisation')); ?>:</b>
	<?php echo CHtml::encode($data->id_fertilisation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_owner')); ?>:</b>
	<?php echo CHtml::encode($data->id_owner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_old_owner')); ?>:</b>
	<?php echo CHtml::encode($data->id_old_owner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kennel_owner')); ?>:</b>
	<?php echo CHtml::encode($data->id_kennel_owner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	*/ ?>

</div>