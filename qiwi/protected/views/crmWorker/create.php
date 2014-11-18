<?php
$this->breadcrumbs=array(
	'Crm Workers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CrmWorker','url'=>array('index')),
	array('label'=>'Manage CrmWorker','url'=>array('admin')),
);
?>

<h1>Create CrmWorker</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>