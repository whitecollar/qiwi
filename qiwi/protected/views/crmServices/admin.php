<?php
$this->breadcrumbs=array(
	'Crm Services'=>array('index'),
	'Manage',
);

$this->menu=array(
	
	array('label'=>'Добавить услугу', 'url'=>array('create'), 'linkOptions'=>array(
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

<h1>Управление услугами</h1>

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

    <?php 
   
    $models = CrmServiceCategory::model()->findAll();
    $list = CHtml::listData($models, 'id', 'name');
   
   /* if (empty($list[$model->name])){
    $category = $list[$model->name];

    } else {$category='Не установленна';
    
    }
    */	  
          
        
    
    
    
    $this->widget('bootstrap.widgets.TbGridView',array(
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
                        'template'=>'{update}{view}{delete}',
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
