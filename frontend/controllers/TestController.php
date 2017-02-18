<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/8
 * Time: 16:02
 */

namespace frontend\controllers;
use frontend\models\Test;
use frontend\models\upload;
use frontend\models\User;
use yii\web\UploadedFile;

use yii;


use yii\web\Controller;
use yii\data\Pagination;



class TestController extends Controller {
//public $enableCsrfValidation = false;


    public function beforeAction($aa)
    {
        $sess=yii::$app->session;
        if($sess->has("userid")){

        }else{
            return true;
        }

    }


    public function actionIndex(){
        $model = new Upload();

        if(Yii::$app->request->isPost){
//            $files = UploadedFile::getInstances($model, 'file');
//            foreach ($files as $file) {
//                $_model = new upload();
//                $_model->file = $file;
//                if ($_model->validate()) {
//                    $_model->file->saveAs('uploads/' . $_model->file->baseName . '.' .
//                        $_model->file->extension);
//                } else {
//                    foreach ($_model->getErrors('file') as $error) {
//                        $model->addError('file', $error);
//                    }
//                }
//            }
//            if ($model->hasErrors('file')){
//                $model->addError(
//                    'file',
//                    count($model->getErrors('file')) . ' of ' . count($files) . ' files not uploaded'
//                );
//            }



            $model->files = UploadedFile::getInstance($model, 'files');
            if ($model->validate()) {
                $model->files->saveAs('uploads/' . $model->files->baseName . '.' .
                    $model->files->extension);
            }else{
                echo 2;
            }

        }else{

            $sql = "select * from user";
            $list = yii::$app->db->createCommand($sql)->queryAll();
            return $this->render('index',[
                'list'=>$list,
                'model'=>$model,
            ]);
        }
    }

    //删除
    public function actionDlt($id){
        $sql = "delect from user where id='$id'";
        $model = new User();
        $rel = $model->findOne($id)->delete();
        if($rel){
            return $this->redirect(['index']);
        }
    }

    public function actionInst(){
        $model = new User();

        if($_POST){
          echo $username = $_POST['User']['username'];
            $sql = "insert into user () VALUES ()";
            $rel = Yii::$app->db->createCommand($sql)->execute();
            if($rel){
                return $this->redirect(['index']);
            }
        }else{
            return $this->render('inst',[
                'model'=>$model,
            ]);
        }
    }

    public function actionSear($username=''){


        $model = New User();

        $session = Yii::$app->session;

        $arr=array(1,2,3,4,5);

        //if(empty($session->get('user_id'))) return 0;

        if(empty($session->get('array'))) $session->set('array',$arr);

        $userModel =  User::find();

        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' =>$userModel->count(),
        ]);


        if(Yii::$app->request->get('username')){
            $time = $session->get('time');
            $array = $session->get('array');

            array_push($array,time());
            array_shift($array);
            if(end($array)-current($array)<60){
                return 3;  //每分钟搜索超过次数
            }else{
                $session->set('array',$array);
            }

            if(time()-$time<5)  return 1; //不够5秒

            $session->set('time',time());
            //进行查询
            $users =$userModel
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->andFilterWhere(['like','username',$username])
                ->all();

            $pagination = new Pagination([
                'defaultPageSize' => 2,
                'totalCount' => $userModel->andFilterWhere(['like','username',$username])->count(),
            ]);

            return $this->renderPartial('sear2',[
                'users'=>$users,
                'model'=>$model,
                'pagination' => $pagination,
            ]);

        }else{

            $users = $userModel
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();

            return $this->render('sear',[
                'users'=>$users,
                'model'=>$model,
                'pagination' => $pagination,
            ]);
        }

    }
}