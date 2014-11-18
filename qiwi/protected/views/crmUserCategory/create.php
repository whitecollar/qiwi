<?php
$this->breadcrumbs=array(
	'Crm User Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CrmUserCategory','url'=>array('index')),
	array('label'=>'Manage CrmUserCategory','url'=>array('admin')),
);
?>

<h1>Create CrmUserCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>