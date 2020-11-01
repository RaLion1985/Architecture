<?php
/** @var \app\model\Goods $catalog */
?>

<? foreach ($catalog as $item) :?>
    <a href="?c=goods&a=card&id=<?=$item['id']?>">
<h2>Наименование товара:<?=$item['name'] ?></h2></a>
<img src="goods_img/small/<?=$item['img']?>" alt="Image">
<p>Описание:<?=$item['description']?> </p>
<p>Цена: <?=$item['price']?> </p>
<?endforeach; ?>
