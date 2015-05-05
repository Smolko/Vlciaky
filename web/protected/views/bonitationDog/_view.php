<?php
/* @var $this BonitationDogController */
/* @var $data BonitationDog */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bonitation_and_youth_presentation')); ?>:</b>
	<?php echo CHtml::encode($data->id_bonitation_and_youth_presentation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dog')); ?>:</b>
	<?php echo CHtml::encode($data->id_dog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evaluation')); ?>:</b>
	<?php echo CHtml::encode($data->evaluation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonitation_code')); ?>:</b>
	<?php echo CHtml::encode($data->bonitation_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('temperament')); ?>:</b>
	<?php echo CHtml::encode($data->temperament); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('harmony')); ?>:</b>
	<?php echo CHtml::encode($data->harmony); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('head_length')); ?>:</b>
	<?php echo CHtml::encode($data->head_length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('head_width')); ?>:</b>
	<?php echo CHtml::encode($data->head_width); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('snout_length')); ?>:</b>
	<?php echo CHtml::encode($data->snout_length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ear_length')); ?>:</b>
	<?php echo CHtml::encode($data->ear_length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oblique_length')); ?>:</b>
	<?php echo CHtml::encode($data->oblique_length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chest_depth')); ?>:</b>
	<?php echo CHtml::encode($data->chest_depth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chest_circle')); ?>:</b>
	<?php echo CHtml::encode($data->chest_circle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('front_leg_length')); ?>:</b>
	<?php echo CHtml::encode($data->front_leg_length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thigh_length')); ?>:</b>
	<?php echo CHtml::encode($data->thigh_length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pastern_length')); ?>:</b>
	<?php echo CHtml::encode($data->pastern_length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pastern_circle')); ?>:</b>
	<?php echo CHtml::encode($data->pastern_circle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarsus_length')); ?>:</b>
	<?php echo CHtml::encode($data->tarsus_length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tibia_length')); ?>:</b>
	<?php echo CHtml::encode($data->tibia_length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
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