<?php
$this->breadcrumbs=array(
	'Crm Clients'=>array('index'),
	'Manage',
);

$this->menu=array(
	
	array('label'=>'Create CrmClients', 'url'=>array('create'), 'linkOptions'=>array(
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
	$.fn.yiiGridView.update('crm-clients-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'TBDialogCrud')); ?>
<?php $this->endWidget(); ?>

<h1>Клиенты</h1>

  <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>' ',
            ));
            $this->widget('bootstrap.widgets.TbMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations'),
            ));
            $this->endWidget();
        ?>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'crm-clients-grid',
	'ajaxUpdate'=>false,
        'type'          => 'striped bordered condensed',  
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'type',
		'phone',
		'login',
		'pass',
		'street',
		/*
		'name',
		'house',
		'flat',
		'birthday',
		'addon',
		'date_in',
		'postcount',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
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
