<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/13
 * Time: 15:09
 */

namespace frontend\models;


use yii\base\Model;
use yii\captcha\Captcha;

class Capche extends Model{



    public $cap;
    public  function rules(){
        return[
            ['cap','required'],
            ['cap', 'captcha'],
        ];
    }

}