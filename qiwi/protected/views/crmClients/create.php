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

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>