<?php foreach($goods as$k=>$v){?>
    <input type="checkbox"  name="id[]" <?=$v['selected']?> value="<?=$v['id']?>"/><?=$v['gname']?>
<?php } ?>