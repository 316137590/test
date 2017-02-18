<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use app\models\Userview;
class LoginController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionLogin()
    {
        if($person_view=\YII::$app->request->post())
        {
            //print_r($person_view);die;
            $email=$person_view['email'];
            $password=$person_view['password'];
            $sql="select * from userview where useremail='$email' and userpwd='$password'";
            $data=YII::$app->db->createCommand($sql)->queryOne();
            //print_r($data);die;
            if ($data)
             {
                $session = Yii::$app->session;
                $session->set('userid',$data['useremail']);
                echo "<script>alert('登陆成功');location.href='?r=lagou/index'</script>";
             }
             else
             {
                echo "登陆失败";
             }
        }else{
            return $this->render('login');
        }
    }

    //legout
    public function actionOut(){
        $session= Yii::$app->session;
        $session->remove('userid');
        $session->remove('user_name');
        return $this->redirect(['lagou/index']);

    }

    //reg
    public function actionRegister()
    {
        //echo 1;
        if($person_view=\YII::$app->request->post())
        {
            //print_r($person_view);die;
            $email=$person_view['email'];
            $data=Userview::find()->where(["useremail"=>"$email"])->asArray()->one();
            //print_r($data);die;
            if ($data)
            {
                echo "<script>alert('用户名已存在');location.href='?r=index/register'</script>";
                //$this->redirect(['index/register']);
            }
            else
            {
                $email=$person_view['email'];
                $password=$person_view['password'];
                $Userview=new Userview;
                $Userview->useremail=$email;
                $Userview->userpwd=$password;
                $Userview->validate();
                $data=$Userview->save();
                if ($data)
                {
                    echo "注册成功";
                    $this->redirect(['login/login']);
                }
                else
                {
                    echo "注册失败";
                }
            }
        }
        else
        {
            return $this->render('register',[
            ]);
        }
    }
}



?>

