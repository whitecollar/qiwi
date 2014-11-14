<?php
$this->breadcrumbs=array(
	'Crm Service Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CrmServiceCategory','url'=>array('index')),
	array('label'=>'Manage CrmServiceCategory','url'=>array('admin')),
);
?>

<h1>Create CrmServiceCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>