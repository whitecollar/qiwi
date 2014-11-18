<?php
 
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
 
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
 
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
 Yii::setPathOfAlias('booster', dirname(__FILE__).'/../extensions/booster');
return array(
    
      'aliases' => array(
      
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // Линк на бутстрап
         'booster' => realpath(__DIR__ . '/../extensions/booster'), // Линк на бустер
    ),
    
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'[QiWi]-CRM',
    'language'=> 'ru',
 
    // preloading 'log' component
    'preload'=>array('log', 'booster'),
      
    
 
    // autoloading model and component classes
    'import'=>array(
        'application.models.*',
        'application.components.*',
        'bootstrap.helpers.*',
          'bootstrap.helpers.TbHtml',
        'bootstrap.helpers.TbArray',
        'bootstrap.behaviors.TbWidget',
        
    ),
    'theme'=>'bootstrap', //подключение темы
    'modules'=>array(
        // uncomment the following to enable the Gii tool
        /**/


////

'gii'=>array(
    'class' => 'system.gii.GiiModule',
    'password'=>'123',
    // If removed, Gii defaults to localhost only. Edit carefully to taste.
    'ipFilters' => array('178.169.92.254','80.91.197.137', '::1'),
    'generatorPaths'=>array(
	'bootstrap.gii',
    ),
),
        
         
      
      
/////

/*


        'gii'=>array(
            'generatorPaths'=>array(
                'bootstrap.gii',
            ),
        ),


*/
        /*    
        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'Enter Your Password Here',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters'=>array('127.0.0.1','::1'),
        ),
        */
    ),
 
    // application components
    'components'=>array(
        'authManager' => array(
    // Будем использовать свой менеджер авторизации
    'class' => 'PhpAuthManager',
    // Роль по умолчанию. Все, кто не админы, модераторы и юзеры — гости.
    'defaultRoles' => array('guest'),
),
        
         
        /*
         'bootstrap'=>array(
                        'class'=>'ext.booster.components.Booster', 
           'coreCss' => true,
      'responsiveCss' => true,
       'yiiCss' => true,
             ),
             
             */
      'bootstrap'=>array(
                        'class'=>'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions

                        'plugins'=>array(
                            // Optionally you can configure the "global" plugins (button, popover, tooltip and transition)
                            // To prevent a plugin from being loaded set it to false as demonstrated below
                            'transition'=>false, // disable CSS transitions
                            'tooltip'=>array(
                                'selector'=>'a.tooltip', // bind the plugin tooltip to anchor tags with the 'tooltip' class
                                'options'=>array(
                                    'placement'=>'bottom', // place the tooltips below instead
                                ),
                            ),
                        ),
         ),
         'css'=>array(
            'css/bootstrap.min.css',
            'css/custom.css',
            'css/bootstrap-responsive.min.css',
            ),
        'user'=>array(
            'class' => 'WebUser',
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
        ),
        
       
        
        // uncomment the following to enable URLs in path-format
        /*
        'urlManager'=>array(
            'urlFormat'=>'path',
            'rules'=>array(
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ),
    
    */
/*
        'db'=>array(
            'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
        ),
        // uncomment the following to use a MySQL database

*/
        
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=crm',
            'emulatePrepare' => true,
            'username' => 'lex',
            'password' => 'lexroot',
            'charset' => 'utf8',
             'enableProfiling'=>true,
             'schemaCachingDuration'=>3600,
           
             'enableParamLogging'=>true,
        ),
        
        'errorHandler'=>array(
            // use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
        'log'=>array(
	'class'=>'CLogRouter',
	'enabled'=>YII_DEBUG,
	'routes'=>array(
		#...
		array(
			'class'=>'CFileLogRoute',
			'levels'=>'error, warning',
		),
		array(
			'class'=>'application.extensions.yii-debug-toolbar.YiiDebugToolbarRoute',
			'ipFilters'=>array('127.0.0.1','178.169.92.254','80.91.197.137'),
		),
	),
),

    ),
 
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params'=>array(
        // this is used in contact page
        'adminEmail'=>'webmaster@example.com',
    ),
);