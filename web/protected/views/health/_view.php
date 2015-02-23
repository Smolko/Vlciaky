<?php
/* @var $this HealthController */
/* @var $data Health */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dlk')); ?>:</b>
	<?php echo CHtml::encode($data->dlk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dbk')); ?>:</b>
	<?php echo CHtml::encode($data->dbk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dwarf')); ?>:</b>
	<?php echo CHtml::encode($data->dwarf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dm')); ?>:</b>
	<?php echo CHtml::encode($data->dm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dna')); ?>:</b>
	<?php echo CHtml::encode($data->dna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('testicles')); ?>:</b>
	<?php echo CHtml::encode($data->testicles); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('teeth')); ?>:</b>
	<?php echo CHtml::encode($data->teeth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('head')); ?>:</b>
	<?php echo CHtml::encode($data->head); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eyes')); ?>:</b>
	<?php echo CHtml::encode($data->eyes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ears')); ?>:</b>
	<?php echo CHtml::encode($data->ears); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('neck')); ?>:</b>
	<?php echo CHtml::encode($data->neck); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trunk')); ?>:</b>
	<?php echo CHtml::encode($data->trunk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upper_limbs')); ?>:</b>
	<?php echo CHtml::encode($data->upper_limbs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lower_limbs')); ?>:</b>
	<?php echo CHtml::encode($data->lower_limbs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tail')); ?>:</b>
	<?php echo CHtml::encode($data->tail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fur')); ?>:</b>
	<?php echo CHtml::encode($data->fur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('movement')); ?>:</b>
	<?php echo CHtml::encode($data->movement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attachment_url')); ?>:</b>
	<?php echo CHtml::encode($data->attachment_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vet')); ?>:</b>
	<?php echo CHtml::encode($data->vet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
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