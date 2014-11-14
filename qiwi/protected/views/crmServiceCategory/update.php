<?php
$this->breadcrumbs=array(
	'Crm Service Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CrmServiceCategory','url'=>array('index')),
	array('label'=>'Create CrmServiceCategory','url'=>array('create')),
	array('label'=>'View CrmServiceCategory','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CrmServiceCategory','url'=>array('admin')),
);
?>

<h1>Update CrmServiceCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>