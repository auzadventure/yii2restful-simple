# yii2restful-simple
Very Basic Yii2 Restful without ActiveController

## This is a very simple Restful with

* sqlite

Set it with 

`sqlite:' . dirname(__FILE__) . "/../data/db.sqlite;dbname=meetup",`


* 1 model 'post'


* some basic CRUD
* no auth

### Pretty Url 

```

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
   ```
 
 - Edit Your .htaccess in the /web folder 
 
 ```
 RewriteEngine on
# If a directory or a file exists, use the request directly

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

# Otherwise forward the request to index.php
RewriteRule . index.php 
```
 
 
 
 
 ### Json Response 
 
 ```
	'request' => [

	'enableCookieValidation' => false,

	'enableCsrfValidation' => false,

	'cookieValidationKey' => 'xxxxxxx',


		'parsers' => [
			'application/json' => 'yii\web\JsonParser',
		]
	],	
```

### Responses 

`return $this->asJson(['ok'=>200,'msg'=>'Table Post Truncated']);`



