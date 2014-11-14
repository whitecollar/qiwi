<?php
$this->breadcrumbs=array(
	'Mains',
);

$this->menu=array(
	array('label'=>'Create Main','url'=>array('create')),
	array('label'=>'Manage Main','url'=>array('admin')),
);
?>

<h1>Mains</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
