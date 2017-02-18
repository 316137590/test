<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $role
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    public $card;
    public $idCard;
    public $cardNum;
    public $pwd;
    public $tel;
    public $telNum;
    public $created_at;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['role', 'status', 'created_at', 'updated_at','card'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            //+++++++++++++++++++++++++++++++++++++

            [['tel'],'match','pattern'=>'/^1[0-9]{10}$/','message'=>'手机号格式不正确'],
            [['cardNum'],'match','pattern'=>'/^1[0-9]{18}$/','message'=>'身份证号格式不正确'],
            [['pwd'],'match','pattern'=>'/^[0-9]{6,12}$/','message'=>'密码必须是数字,且大于6为小于12位'],

            [['created_at'],'safe'],
            [['username'],'unique'],



        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '姓名',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'role' => 'Role',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'card' => '银行卡卡号',
            'inCard' => '身份证',
            'tel' => '电话',
            'telNum' => '手机验证码',
            'idCard' => '证件',
            'pwd' => '密码',

        ];
    }
}
