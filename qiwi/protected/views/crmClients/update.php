<?php
$this->breadcrumbs=array(
	'Crm Clients'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CrmClients','url'=>array('index')),
	array('label'=>'Create CrmClients','url'=>array('create')),
	array('label'=>'View CrmClients','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CrmClients','url'=>array('admin')),
);
?>

<h1>Update CrmClients <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>