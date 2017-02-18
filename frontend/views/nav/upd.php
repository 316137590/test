<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/11
 * Time: 9:15
 */
?>
<?php $form=\yii\widgets\ActiveForm::begin(
    ['options'=>['class'=>'form-inline']]
)?>
<?=$form->field($model,'id')->hiddenInput(['value'=> $list['id']] )->label(false)?>
<?=$form->field($model,'nname')->textInput(['value'=> $list['nname']] )->label('名字')?>
<?=$form->field($model,'sortorder')->textInput(['value'=> $list['sortorder']] )->label('排序')?>
<?//=$form->field($model,'s_t')->textInput(['value'=> $list['s_t']] )->label('新窗口打开方式')?>
<?=$form->field($model,'s_t')->dropDownList([
    '_self'=>'当前窗口',
    '_blank'=>'新窗口',
])->label('窗口打开方式')?>
<?=\yii\helpers\Html::submitButton()?>
<?php \yii\widgets\ActiveForm::end()?>