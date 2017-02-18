<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/11
 * Time: 8:54
 */
?>
    <h2><a href="<?=Yii::$app->urlManager->createUrl('nav/mann')?>">导航管理</a></h2>
<table>
    <tr>
        <td>id</td>
        <td>名称</td>
        <td>排序</td>
        <td>打开新窗口方式</td>
        <td>编辑</td>
    </tr>
    <?php foreach($list as $val){?>
        <tr>
        <td><?=$val['id']?></td>
        <td><?=$val['nname']?></td>
        <td><?=$val['sortorder']?></td>
        <td><?=$val['s_t']?></td>
        <td>
            <a href="<?=Yii::$app->urlManager->createUrl('nav/upd').'&id='.$val['id']?>">编辑</a>
        </td>
        </tr>
    <?php }?>
</table>
