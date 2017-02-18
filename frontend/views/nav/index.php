<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/11
 * Time: 8:54
 */
?>
<h2><a href="<?=Yii::$app->urlManager->createUrl('nav/mann')?>">导航管理</a></h2>
<?php foreach($list as $val){?>
<a href="" target="<?=$val['s_t']?>"><?=$val['nname']?></a>
<?php }?>