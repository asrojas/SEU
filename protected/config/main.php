<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');


return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Sistema de Empaques Universitarios',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.extensions.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'generatorPaths'=>array(
					'bootstrap.gii',
			),
			'class'=>'system.gii.GiiModule',
			'password'=>'master_master',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('127.0.0.1','::1'),
                        'ipFilters'=>array('*'),
		),
		
	),

	// application components
	'components'=>array(
		'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),
	
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
//			'connectionString' => 'mysql:host=localhost;dbname=seu_db',
                        'connectionString' => 'mysql:host=localhost;dbname=seu_db',
			'emulatePrepare' => true,
			'username' => 'seu',
			'password' => 'seu2013',
			'charset' => 'utf8',
                    
//                    'connectionString' => 'mysql:host=https://mysql16.000webhost.com;dbname="a2972641_seudb',
//                    'emulatePrepare' => true,
//                    'username' => 'a2972641_seu',  
//                    'password' => 'master_master',
//                    'charset' => 'utf8',
                    
                    
//                    'connectionString' => 'mysql:host=http://www.seu.cl;dbname=seu_db',
//			'emulatePrepare' => true,
//			'username' => 'seucl_root',
//			'password' => 'master_master',
//			'charset' => 'utf8',
                    
                    ),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
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