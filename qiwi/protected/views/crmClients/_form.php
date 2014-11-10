<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'crm-clients-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'type',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'login',array('class'=>'span5')); ?>

	<?php echo $form->passwordFieldRow($model,'pass',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'street',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'house',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'flat',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'birthday',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'addon',array('class'=>'span5','maxlength'=>250)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
