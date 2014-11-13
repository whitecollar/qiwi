<?php
$this->breadcrumbs=array(
	'Crm Services'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CrmServices','url'=>array('index')),
	array('label'=>'Create CrmServices', 'url'=>array('create'), 'linkOptions'=>array(
		'ajax' => array(
			'url'=>$this->createUrl('create'),
			'success'=>'function(r){$("#TBDialogCrud").html(r).modal("show");}', 
		),
	)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('crm-services-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'TBDialogCrud')); ?>
<?php $this->endWidget(); ?>

<h1>Manage Crm Services</h1>

    

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'crm-services-grid',
         'type'          => 'striped bordered condensed',
	'ajaxUpdate'=>false,
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'id_salon',
		'discount',
		'name',
		'count',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template'=>'{update}{view}',
			'buttons' => array(
				'update' => array(
					'click'=>'function(){
						var url = $(this).attr("href");
						$.get(url, function(r){
							$("#TBDialogCrud").html(r).modal("show");
						});
						return false;
					}',
				),
				'view' => array(
					'click'=>'function(){
						var url = $(this).attr("href");
						$.get(url, function(r){
							$("#TBDialogCrud").html(r).modal("show");
						});
						return false;
					}',
				),
			),
		),
	),
)); ?>
