<?php
$this->breadcrumbs=array(
	'Crm Workers',
);

$this->menu=array(
	array('label'=>'Create CrmWorker','url'=>array('create')),
	array('label'=>'Manage CrmWorker','url'=>array('admin')),
);
?>

<h1>Crm Workers</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
