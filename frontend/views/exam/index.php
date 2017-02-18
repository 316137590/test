<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/13
 * Time: 9:03
 */
use yii\captcha\Captcha;

?>
    <script src="js/js.js"></script>

<?php $form=\yii\widgets\ActiveForm::begin()?>

<?=$form->field($cmodel,'cname')->dropDownList($cate)->label('商品分类')?>

<div id="ddvv">

    <?php foreach($goods as$k=>$v){?>
    <input type="checkbox"  name="id[]" <?=$v['selected']?> value="<?=$v['id']?>"/><?=$v['gname']?>
    <?php } ?>
</div>

<div>
    <?=$form->field($gmodel,'id')->checkboxList($goo)->label(false)?>
</div>

<?= $form->field($model, 'cap')->widget(Captcha::className())->label('验证码') ?>

<?=\yii\helpers\Html::submitButton('保存')?>

<?php \yii\widgets\ActiveForm::end()?>

<script>
    $(function(){
        $("#cate-cname").change(function(){
            _this = $(this).val();

            $.get("<?=Yii::$app->urlManager->createUrl('exam/index')?>", { bb: _this },
                function(data){
                    $("#ddvv").html(data);
                });

        })
    })
</script>