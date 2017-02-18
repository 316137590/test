<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * UserController implements the CRUD actions for User model.
 */
class PositionController extends Controller
{

    public $layout="head";
    public function actionIndex(){
        $session = Yii::$app->session;
        $session->set("aaa","aaa");

        $view = Yii::$app->view;
        $view->params['ta'] = '传给layout的值';


        return $this->render('delivery',
            [

        ]);
    }

}