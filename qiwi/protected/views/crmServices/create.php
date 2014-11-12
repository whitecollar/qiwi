<?php
$this->breadcrumbs=array(
	'Crm Services'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CrmServices','url'=>array('index')),
	array('label'=>'Manage CrmServices','url'=>array('admin')),
);
?>

<h1>Create CrmServices</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>