<?php
/* @var $this EnduranceRunController */
/* @var $data EnduranceRun */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('count_male_svp1')); ?>:</b>
	<?php echo CHtml::encode($data->count_male_svp1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('count_female_svp1')); ?>:</b>
	<?php echo CHtml::encode($data->count_female_svp1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('count_male_svp2')); ?>:</b>
	<?php echo CHtml::encode($data->count_male_svp2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('count_female_svp2')); ?>:</b>
	<?php echo CHtml::encode($data->count_female_svp2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('count_male_svp3')); ?>:</b>
	<?php echo CHtml::encode($data->count_male_svp3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('count_female_svp3')); ?>:</b>
	<?php echo CHtml::encode($data->count_female_svp3); ?>
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