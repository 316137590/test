<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * UserController implements the CRUD actions for User model.
 */
class CommonController extends Controller
{

    public function beforeAction(){
        $session= Yii::$app->session;
        if($session->has('userid')){
            return true;
        }else{
            echo "AF";
            return false;
        };
    }


        public function init(){
             echo  $this->renderPartial('../layouts/head',[
             ]);
        }

}