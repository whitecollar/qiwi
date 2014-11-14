<?php
$this->breadcrumbs=array(
	'Crm Service Categories',
);

$this->menu=array(
	array('label'=>'Create CrmServiceCategory','url'=>array('create')),
	array('label'=>'Manage CrmServiceCategory','url'=>array('admin')),
);
?>

<h1>Crm Service Categories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
