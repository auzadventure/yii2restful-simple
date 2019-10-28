<?php
return [
    'id' => 'micro-app',
    // the basePath of the application will be the `micro-app` directory
    'basePath' => __DIR__,
    // this is where the application will find all controllers
    'controllerNamespace' => 'micro\controllers',
    // set an alias to enable autoloading of classes from the 'micro' namespace
    'aliases' => [
        '@micro' => __DIR__,
    ],

	'components' => [
		'db' => [
			'class' => 'yii\db\Connection',
			'dsn' => 'sqlite:@micro/database.sqlite',
		],

		'request' => [

        	'enableCookieValidation' => false,

        	'enableCsrfValidation' => false,

        	'cookieValidationKey' => 'xxxxxxx',


			'parsers' => [
				'application/json' => 'yii\web\JsonParser',
			]
		],	

		'urlManager' => [
		        'enablePrettyUrl' => true,
		        'showScriptName' => false,
		    	'rules' => [
		    		[
		    		 'class' => 'yii\rest\UrlRule', 
		    		 'controller' => 'post',
		    	     'extraPatterns'=> [
		    	     		'DELETE all'=>'delete-all'
		    	     		]
		    	    ]
		    	 ],	
		    		/*
			        '<controller:\w+>/<id:\d+>' => '<controller>/view',

			        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',

			        '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
    				*/
    			
    	] //end components 					
		
	],


	
];