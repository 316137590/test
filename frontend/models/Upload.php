<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/9
 * Time: 7:49
 */

namespace frontend\models;


use yii\base\Model;
use yii\web\UploadedFile;

class Upload extends Model {
    public $files;

    public function rules(){
        return [
            [
                ['files'],'file', 'maxFiles'=>8], //设置图片的验证规则
        ];
    }
}