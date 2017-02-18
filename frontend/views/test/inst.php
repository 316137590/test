<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/8
 * Time: 21:22
 */
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
$datetime = new \DateTime();
$datetime->setTimestamp(1465783744);
//$datetime->format('Y-m-d H:i:s');
$datetime1 = new \DateTime('2016-01-01 10:11:18');
$datetime2 = new \DateTime('2017-05-11 22:21:21');
$interval = $datetime1->diff($datetime2);

print_r($interval->format('%R'));//拿时间二和时间一对比
?>
<?php $form = ActiveForm::begin(
    //[ 'options'=>['class'=>'form-inline']]
)?>
<?//= $form->field($model, 'created_at')->widget(DateTimePicker::classname(), [
//    'options' => ['placeholder' => ''],
//    'pluginOptions' => [
//        'autoclose' => true,
//        'todayHighlight' => true,
//    ]
//]); ?>
    <hr/>








<?=$form->field($model,'card')->textInput(['style'=>'width:60%;'])->label("银行卡卡号:",['style'=>'float:left;width:100px;'])?>
<?=$form->field($model,'username')->textInput(['style'=>'width:60%;'])->label("姓  名:",['style'=>'float:left;width:100px;'])?>









<?=$form->field($model,'cardNum')->textInput(['style'=>'width:60%;width:60%;'])->label(" ",['style'=>'float:left;width:100px;'])?>
<?=$form->field($model,'pwd')->passwordInput(['style'=>'width:60%;'])->label("密码:",['style'=>'float:left;width:100px;'])?>
<?=$form->field($model,'tel')->textInput(['style'=>'width:60%;'])->label("手机号:",['style'=>'float:left;width:100px;'])?>
<?=$form->field($model,'telNum')->textInput(['style'=>'width:60%;'])->label("手机验证码:",['style'=>'float:left;width:100px;'])?>







<?php echo  \yii\helpers\Html::submitButton('提交')?>
<?php $form->end()?>