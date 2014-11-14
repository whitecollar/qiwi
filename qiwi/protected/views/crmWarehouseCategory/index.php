<?php
$this->breadcrumbs=array(
	'Crm Warehouse Categories',
);

$this->menu=array(
	array('label'=>'Create CrmWarehouseCategory','url'=>array('create')),
	array('label'=>'Manage CrmWarehouseCategory','url'=>array('admin')),
);
?>

<h1>Crm Warehouse Categories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
