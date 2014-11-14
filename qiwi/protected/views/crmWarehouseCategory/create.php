<?php
$this->breadcrumbs=array(
	'Crm Warehouse Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CrmWarehouseCategory','url'=>array('index')),
	array('label'=>'Manage CrmWarehouseCategory','url'=>array('admin')),
);
?>

<h1>Create CrmWarehouseCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>