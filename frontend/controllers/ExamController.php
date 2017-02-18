<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/13
 * Time: 8:52
 */

namespace frontend\controllers;
use frontend\models\Capche;
use yii;

use frontend\models\Goods;
use frontend\models\Cate;

class ExamController extends yii\web\Controller {

    public function actionIndex(){
        $model = new Capche();
        $id = isset($_GET['bb'])?$_GET['bb']:1;
        if(Yii::$app->request->post('id')){
            foreach($_POST['id'] as $val){
                $goodsModel = Goods::findOne($val);
                $goodsModel->cate = $_POST['Cate']['cname'];
                $goodsModel->save();
            }
        }

        $cmodel = new Cate();
        $gmodel = new Goods();
        $cate = Cate::find()->asArray()->all();
        $arr = array();
        foreach($cate as $val){
            $arr[$val['id']]=$val['cname'];
        }
        $goods = Goods::find()->asArray()->all();
//        foreach($goods as $key=> $val){
//            if($goods[$key]['cate']==$id){
//                $goods[$key]['selected']='checked';
//            }else{
//                $goods[$key]['selected']='';
//            }
//        }

        $goods1 = Goods::find()->where("cate='$id'")->asArray()->all();
        $bb=array();
        foreach($goods1 as $k=>$v){
            $bb[]=$v['id']-1;
        }
        //print_r($bb);die;

        $goo= array();
        foreach($goods as $key=> $val){
            $goo[$key]=$val['gname'];
        }


        foreach($cate as $key=> $val){
            if($cate[$key]['id']==$id){
                $cate[$key]['selected']='selected';
            }else{
                $cate[$key]['selected']='';
            }
        }

        if(isset($_GET['bb'])){

             $this->renderPartial('index1',[
                'goods'=>$goods,
            ]);
        }
        $gmodel->id = $bb;
        return $this->render('index',[
            'cate'=>$arr,
            'goods'=>$goods,
            'cmodel'=>$cmodel,
            'gmodel'=>$gmodel,
            'model'=>$model,
            'goo'=>$goo,
        ]);

    }

    public function actionTest(){
        $cmodel = new Cate();

        $dat = $cmodel->find()->asArray()->all();

        $this->layout="head.php";
        return $this->render('test',[
            'dat'=>$this->digui($dat),
        ]);
    }

    public function digui($dat){
        foreach($dat as $key=>$val){
            $gmodel = new Goods();
            $date = $gmodel->find()->where("cate = '".$val['id']."'")->asArray()->all();
            $dat[$key]['sun'] = $date;
        }

        return $dat;
    }
}