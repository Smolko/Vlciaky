<?php
/* @var $this ExhibitionChildDogController */
/* @var $data ExhibitionChildDog */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_exhibition')); ?>:</b>
	<?php echo CHtml::encode($data->id_exhibition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dog')); ?>:</b>
	<?php echo CHtml::encode($data->id_dog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('child')); ?>:</b>
	<?php echo CHtml::encode($data->child); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place')); ?>:</b>
	<?php echo CHtml::encode($data->place); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	*/ ?>

</div>