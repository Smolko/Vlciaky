<?php
/* @var $this ExhibitionController */
/* @var $data Exhibition */
?>
<table style="margin: 0 0 0 0;">
    <tr>
        <td><?php echo CHtml::encode($data->name); ?></td>
        <td><?php echo CHtml::encode($data->place); ?></td>
        <td><?php echo CHtml::encode($data->date); ?></td>
        <td><?php echo CHtml::encode($data->referee); ?></td>
    </tr>
</table>
