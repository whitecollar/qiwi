<?php
$this->breadcrumbs=array(
	'Crm Clients',
);

$this->menu=array(
	array('label'=>'Create CrmClients','url'=>array('create')),
	array('label'=>'Manage CrmClients','url'=>array('admin')),
);
?>

<h1>Crm Clients</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
