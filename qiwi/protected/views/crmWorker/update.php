<?php
$this->breadcrumbs=array(
	'Crm Workers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CrmWorker','url'=>array('index')),
	array('label'=>'Create CrmWorker','url'=>array('create')),
	array('label'=>'View CrmWorker','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CrmWorker','url'=>array('admin')),
);
?>

<h1>Update CrmWorker <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>