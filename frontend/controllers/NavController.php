<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/8
 * Time: 16:02
 */

namespace frontend\controllers;
use frontend\models\Nav;
use yii;


class NavController extends yii\web\Controller {
    public function actionIndex(){
        $nav = new Nav();
        $list = $nav->find()->asArray()->all();

        return $this->renderPartial('index',[
            'list'=>$list,
        ]);
    }

    public function actionMann(){
        $nav = new Nav();
        $list = $nav->find()->asArray()->all();

        return $this->renderPartial('mann',[
            'list'=>$list,
        ]);
    }

    public function actionUpd($id){
        $nav = new Nav();
        if(Yii::$app->request->post()){
            $dat= Yii::$app->request->post('Nav');
            $model = Nav::findOne($id);
            $model->nname = $dat['nname'];
            $model->sortorder = $dat['sortorder'];
            $model->s_t = $dat['s_t'];
            $rel = $model->update();
            //$sql = "update nav set nname='".$dat['nname']."',sortorder='".$dat['sortorder']."',s_t='".$dat['s_t']."' where `id`='".$dat['id']."'";
           // $rel = Yii::$app->db->createCommand()->update('nav',"id='$id'",$dat)->execute()
            if($rel){
                return $this->redirect(['mann']);
            }else{
                echo 'shibai';
            }

        }else{
            $data= $nav->find($id)->asArray()->One();
            return $this->renderPartial('upd',[
                'list'=>$data,
                'model'=>$nav,
            ]);
        }

    }
}