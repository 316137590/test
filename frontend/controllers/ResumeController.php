<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use app\models\Job;
class ResumeController extends Controller
{
    public $layout="head";
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        if (Yii::$app->request->isPost) {
            $model=new Job;
            $data=\Yii::$app->request->post();
            $model->username=$data['username'];
            $model->home=$data['home'];
            $model->email=$data['email'];
            $model->tel=$data['tel'];
            $model->sex=$data['sex'];
            $model->job=$data['job'];
            $model->duty=$data['duty'];
            $model->place=$data['place'];
            $model->money=$data['money'];
            $model->companyName=$data['companyName'];
            $model->positionName=$data['positionName'];
            $model->jobstime=$data['jobstime'];
            $model->jobetime=$data['jobetime'];
            $model->projectName=$data['projectName'];
            $model->thePost=$data['thePost'];
            $model->pstime=$data['pstime'];
            $model->petime=$data['petime'];
            $model->projectdesc=$data['projectdesc'];
            $model->selfdesc=$data['selfdesc'];
            //print_r($data);die;
             if ($model->save())
            {
            //$id=$model->id;
            return $this->render('preview',['data'=>$data]);

            }
            else
            {
                $uid=1;
                $model=new Job;
                $data=$model->find()->where("id='$uid'")->asArray()->one();
                echo $data->createCoetmmand()->getRawSql();die;
                //echo "添加失败";
            }
        }else{
            return $this->render('jianli',[

            ]);
        }
    }
    // public function actionShow()
    // {
    //     // $model=new Job;
    //     // $data=$model->find()->where("id='$uid'")->asArray()->one();
    //     //
    //     //print_r($data);die;
    //     return $this->renderPartial('');
    // }



}
?>