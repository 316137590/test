<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/11
 * Time: 14:42
 */
use yii\widgets\LinkPager;


?>
    <script src="js/js.js"></script>
<?php $form=\yii\widgets\ActiveForm::begin([
    'options'=>['class'=>'form-inline']
])?>
<?=$form->field($model,'username')->textInput()->label(false)?>
<?=\yii\helpers\Html::buttonInput('搜索',['class'=>"aa"])?>
    <input type="button"/>
<?php \yii\widgets\ActiveForm::end()?>

<div id="ddvv">
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <?= \yii\helpers\Html::encode("{$user->username}") ?>:

            </li>
        <?php endforeach; ?>
    </ul>
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>




<script>
    $(function(){
        $(".aa").click(function(){
            val = $("#user-username").val();
            $.get("<?=Yii::$app->urlManager->createUrl('test/sear')?>", { username: val },
                function(data){
                    if(data==0){
                        alert('请先登录')
                    }else if(data==1){
                        alert("5秒后再试")
                    }else{
                        $("#ddvv").html(data);
                    };
                });
        })
    })

</script>