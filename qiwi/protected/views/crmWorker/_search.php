<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_salon',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_branch',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'service',array('class'=>'span5','maxlength'=>1000)); ?>

	<?php echo $form->textFieldRow($model,'post_count',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'count',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'schedule',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'addon',array('class'=>'span5','maxlength'=>1000)); ?>

	<?php echo $form->textFieldRow($model,'passport',array('class'=>'span5','maxlength'=>2000)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
