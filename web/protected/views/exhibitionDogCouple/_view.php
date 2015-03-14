<?php
/* @var $this ExhibitionDogCoupleController */
/* @var $data ExhibitionDogCouple */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('id_exhibition')); ?>:</b>
	<?php echo CHtml::encode($data->id_exhibition); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dog1')); ?>:</b>
	<?php echo CHtml::encode($data->id_dog1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dog2')); ?>:</b>
	<?php echo CHtml::encode($data->id_dog2); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />


</div>