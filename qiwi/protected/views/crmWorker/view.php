<?php if(!Yii::app()->request->isAjaxRequest): ?>
<?php
$this->breadcrumbs=array(
	'Crm Workers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CrmWorker','url'=>array('index')),
	array('label'=>'Create CrmWorker','url'=>array('create')),
	array('label'=>'Update CrmWorker','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CrmWorker','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CrmWorker','url'=>array('admin')),
);
?>

<h1>View CrmWorker #<?php echo $model->id; ?></h1>
<?php endif; ?>

<?php if(Yii::app()->request->isAjaxRequest): ?>
<div class="modal-header">
	<a class="close" data-dismiss="modal">&times;</a>
	<h4>View People #<?php echo $model->id; ?></h4>
</div>

<div class="modal-body">
<?php endif; ?>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_salon',
		'id_branch',
		'phone',
		'password',
		'name',
		'service',
		'post_count',
		'count',
		'schedule',
		'addon',
		'passport',
	),
)); ?>

<?php if(Yii::app()->request->isAjaxRequest): ?>
</div>

<div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Закрыть',
        'url'=>'#',
        'htmlOptions'=>array(
			'id'=>'btn-'.mt_rand(),
			'data-dismiss'=>'modal'
		),
    )); ?>
</div>

<?php endif; ?>