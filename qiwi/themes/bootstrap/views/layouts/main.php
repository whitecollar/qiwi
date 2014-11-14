<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="ru" />
       
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>
 <?php if (Yii::app()->user->isGuest) {
   
 } else {?>
<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
       // TbHtml::navbarSearchForm('#'),
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            
            'items'=>array(
               
                array('label'=>'Заказ', 'url'=>array('main/admin')),
                array('label'=>'Календарь', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Клиенты', 'url'=>array('/site/contact')),
                
                            array('label' => 'Настройки', 'items' => array(
                                  array('label' => 'Услуги', 'items' => array(   
                                        array('label' => 'Редактирование', 'url' => '?r=crmServices/admin' ),
                                        array('label' => 'Категории', 'url' => '?r=crmServiceCategory/admin' ),
                                 ) ),
                            
                            array('label' => 'Another action', 'url' => '#'),
                            array('label' => 'Something else here', 'url' => '#'),
                            TbHtml::menuDivider(),
                            array('label' => 'Separate link', 'url' => '#'),
        ),
                                
    ),
                array('label'=>'Выход ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
               
            ),
        ),
    ),
)); 


?>
<?php }?>
<div class="container" id="page">



	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Laboratory unconventional solutions LTD.<br/>
		All Rights Reserved.<br/>
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
