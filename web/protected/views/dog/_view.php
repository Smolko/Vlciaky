<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_owner')); ?>:</b>
	<?php echo CHtml::encode($data->ownerName); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('new_regnumber')); ?>:</b>
	<?php echo CHtml::encode($data->new_regnumber); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sexName); ?>
	<br />

	 

</div>