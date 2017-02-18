<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/8
 * Time: 17:41
 */
use yii\widgets\ActiveForm;
?>
<h3>
    <a href="<?=Yii::$app->urlManager->createUrl('test/inst')?>">inst</a>
</h3>
    <h3>
    <a href="<?=Yii::$app->urlManager->createUrl('test/sear')?>">点击搜索</a>
</h3>
<table>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>caozuo</td>
    </tr>
    <?php foreach($list as $val){?>
    <tr>
        <td><?=$val['id']?></td>
        <td><?=$val['username']?></td>
        <td>
            <a href="<?=Yii::$app->urlManager->createUrl('test/upt')."&id=".$val['id']?>">upt</a>
            <a href="<?=Yii::$app->urlManager->createUrl('test/dlt')."&id=".$val['id']?>">dlt</a>
        </td>
    </tr>
    <?php }?>
</table>
<hr/>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}?>

<?= $form->field($model, 'files[]')->fileInput(['multiple'=>true]) ?>

<?=\yii\helpers\Html::submitButton('ad')?>
<?php ActiveForm::end()?>