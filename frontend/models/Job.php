<?php
namespace app\models;
use yii\db\ActiveRecord;
class Job extends ActiveRecord
{
     public $username;
     public function rules()
     {
        return [
        [['username'],'required']
        ];
     }
}