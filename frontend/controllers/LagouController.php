<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Index;
use yii\web\UploadedFile;

class LagouController extends Controller{
    public $layout = 'head';
    public function actionIndex()
    {
        $sql ="select * from cate ";
        $date = Yii::$app->db->createCommand($sql)->queryAll();



        $sql2 ="select position_name , position_id ,position_city,user_id from position limit 0, 6";
        $date2 = Yii::$app->db->createCommand($sql2)->queryAll();


        return $this->render('index', [
            'date'=>$this->digui($date),
            'position'=>$date2,
        ]);
    }


    public function digui($date){
        foreach ($date as $key => $val) {
            $sql ="select position_name , position_id from position WHERE position_cate = '".$val['cate_id']."'";
            $dat = Yii::$app->db->createCommand($sql)->queryAll();
            $date[$key]['sun'] =$dat;
        }
        return $date;


    }
}

?>


