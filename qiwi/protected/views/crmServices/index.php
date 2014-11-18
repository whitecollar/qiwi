<?php
$this->breadcrumbs=array(
	'Crm Services',
);

$this->menu=array(
	array('label'=>'Create CrmServices','url'=>array('create')),
	array('label'=>'Manage CrmServices','url'=>array('admin')),
);
?>

<h1>Crm Services</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
