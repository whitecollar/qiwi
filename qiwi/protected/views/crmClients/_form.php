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

	<?php if (!Yii::app()->request->isAjaxRequest): ?>
    <div class="row buttons ">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
    </div>
     
    <?php else: ?>
    <div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
        <div class="ui-dialog-buttonset">
        <?php
            $this->widget('zii.widgets.jui.CJuiButton', array(
                'name'=>'submit_'.rand(),
                'caption'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
                'htmlOptions'=>array(
                    'ajax' => array(
                        'url'=>$model->isNewRecord ? $this->createUrl('create') : $this->createUrl('update', array('id'=>$model->id)),
                        'type'=>'post',
                        'data'=>'js:jQuery(this).parents("form").serialize()',
                        'success'=>'function(r){
                            if(r=="success"){
                                window.location.reload();
                            }
                            else{
                                $("#create").html(r).dialog("open"); return false;
                            }
                        }', 
                    ),
                ),
            ));
        ?>
        </div>
    </div>
    <?php endif; ?>
 
<?php $this->endWidget(); ?>
 
</div><!-- form -->