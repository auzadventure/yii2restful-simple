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



