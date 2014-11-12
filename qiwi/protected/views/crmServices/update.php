<?php
$this->breadcrumbs=array(
	'Crm Services'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CrmServices','url'=>array('index')),
	array('label'=>'Create CrmServices','url'=>array('create')),
	array('label'=>'View CrmServices','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CrmServices','url'=>array('admin')),
);
?>

<h1>Update CrmServices <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>