<?php
$this->breadcrumbs=array(
	'Crm User Categories',
);

$this->menu=array(
	array('label'=>'Create CrmUserCategory','url'=>array('create')),
	array('label'=>'Manage CrmUserCategory','url'=>array('admin')),
);
?>

<h1>Crm User Categories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
