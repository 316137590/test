<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/11
 * Time: 16:39
 */
use yii\widgets\LinkPager;
?>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <?= \yii\helpers\Html::encode("{$user->username}") ?>:

            </li>
        <?php endforeach; ?>
    </ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>