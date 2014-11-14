<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_salon',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_fil',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_master',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_jobs',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'date_out',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'commit',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'date_commit',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'date_in',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'account_doc',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
