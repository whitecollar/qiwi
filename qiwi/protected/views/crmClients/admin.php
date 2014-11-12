<?php
$this->breadcrumbs=array(
	'Crm Clients'=>array('index'),
	'Manage',
);
 
$this->menu=array(
	array('label'=>'List CrmClients','url'=>array('index')),
	array('label'=>'Create CrmClients','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('crm-clients-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Crm Clients</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'crm-clients-grid',
	'dataProvider'=>$model->search(),
           'type' => TbHtml::GRID_TYPE_STRIPED,
    'type' => TbHtml::GRID_TYPE_BORDERED,
	'filter'=>$model,
	'columns'=>array(
		'id',
		'type',
		'phone',
		'login',
		'pass',
		'street',
		
		'name',
		'house',
		'flat',
		'birthday',
		'addon',
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
