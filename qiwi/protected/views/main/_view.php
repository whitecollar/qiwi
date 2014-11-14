<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_salon')); ?>:</b>
	<?php echo CHtml::encode($data->id_salon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_fil')); ?>:</b>
	<?php echo CHtml::encode($data->id_fil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_master')); ?>:</b>
	<?php echo CHtml::encode($data->id_master); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jobs')); ?>:</b>
	<?php echo CHtml::encode($data->id_jobs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_out')); ?>:</b>
	<?php echo CHtml::encode($data->date_out); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commit')); ?>:</b>
	<?php echo CHtml::encode($data->commit); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_commit')); ?>:</b>
	<?php echo CHtml::encode($data->date_commit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_in')); ?>:</b>
	<?php echo CHtml::encode($data->date_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_doc')); ?>:</b>
	<?php echo CHtml::encode($data->account_doc); ?>
	<br />

	*/ ?>

</div>