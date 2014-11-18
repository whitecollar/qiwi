<?php
$this->breadcrumbs=array(
	'Crm User Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CrmUserCategory','url'=>array('index')),
	array('label'=>'Create CrmUserCategory','url'=>array('create')),
	array('label'=>'View CrmUserCategory','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CrmUserCategory','url'=>array('admin')),
);
?>

<h1>Update CrmUserCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>