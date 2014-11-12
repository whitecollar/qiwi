<?php if (!Yii::app()->request->isAjaxRequest): ?>
<?php
$this->breadcrumbs=array(
	'Crm Clients'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CrmClients','url'=>array('index')),
	array('label'=>'Manage CrmClients','url'=>array('admin')),
);
?>

<h1>Create CrmClients</h1>

<?php endif; ?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>