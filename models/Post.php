<?php

namespace micro\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{ 
    public static function tableName()
    {
        return '{{post}}';
    }


    public function rules()
    {
        return [
            [['title', 'body'], 'string'],
        ];
    }    
}