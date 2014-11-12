<?php
$this->breadcrumbs=array(
	'Crm Clients'=>array('index'),
	'Manage',
);
 


$this->menu=array(
    array('label'=>'List Champion', 'url'=>array('index')),
    array('label'=>'Create Champion', 'url'=>array('create'), 'linkOptions'=>array(
        'ajax' => array(
            'url'=>$this->createUrl('create'),
            'success'=>'function(r){$("#create").html(r).dialog("open"); return false;}', 
        ),
    )),
);

$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
        'id'=>'create',
        'options'=>array(
            'title'=>'Create People',
            'autoOpen'=>false,
            'modal'=>true,
            'width'=>'auto',
            'height'=>'auto',
            'resizable'=>'false',
        ),
    ));
$this->endWidget();

$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
        'id'=>'update',
        'options'=>array(
            'title'=>'Update People',
            'autoOpen'=>false,
            'modal'=>true,
            'width'=>'auto',
            'height'=>'auto',
            'resizable'=>'false',
        ),
    ));
$this->endWidget();



$updateDialog =<<<'EOT'
function() {
    var url = $(this).attr('href');
    $.get(url, function(r){
        $("#update").html(r).dialog("open");
    });
    return false;
}
EOT;
 
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('people-grid', {
        data: $(this).serialize()
    });
    return false;
});
");



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
		/*
		'name',
		'house',
		'flat',
		'birthday',
		'addon',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                    'buttons' => array(
                'update' => array(
                    'click'=>$updateDialog
             ),
            ),
		),
	),
)); ?>
