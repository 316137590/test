<?php
namespace frontend\models;
use yii\db\ActiveRecord;
class Nav extends ActiveRecord
{
    public function rules()
    {
        return [
            [['nname'],'unique'],
            [['nname'],'required'],
        ];
    }

}