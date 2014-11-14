<?php
$this->breadcrumbs=array(
	'Crm Warehouse Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CrmWarehouseCategory','url'=>array('index')),
	array('label'=>'Create CrmWarehouseCategory','url'=>array('create')),
	array('label'=>'View CrmWarehouseCategory','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CrmWarehouseCategory','url'=>array('admin')),
);
?>

<h1>Update CrmWarehouseCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>