<?php
/** @var \app\model\Products $product */
?>

<h2>Наименование товара:<?=$product->name?></h2>
<img src="/goods_img/small/<?=$product->img?>" alt="Image">
<p>Описание:<?=$product->description?> </p>
<p>Цена: <?=$product->price?> </p>



<button id="<?=$product->id?>" class="action">Купить</button>