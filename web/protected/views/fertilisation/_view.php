<?php
/* @var $this FertilisationController */
/* @var $data Fertilisation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fertilisation_date')); ?>:</b>
	<?php echo CHtml::encode($data->fertilisation_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('litter_date')); ?>:</b>
	<?php echo CHtml::encode($data->litter_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('male_count')); ?>:</b>
	<?php echo CHtml::encode($data->male_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('female_count')); ?>:</b>
	<?php echo CHtml::encode($data->female_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dog_mother')); ?>:</b>
	<?php echo CHtml::encode($data->id_dog_mother); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dog_father')); ?>:</b>
	<?php echo CHtml::encode($data->id_dog_father); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kennel')); ?>:</b>
	<?php echo CHtml::encode($data->id_kennel); ?>
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