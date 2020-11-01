<div class="content">
<?
foreach ($catalog as $item) :?>
    <a href="product/card/?id=<?= $item['id'] ?>"><h2><?= $item['name'] ?></h2></a>
    <p>Описание: <?= $item['description'] ?></p>
    <img src="/goods_img/small/<?=$item['img']?>" alt="Image">
    <p>Стоимость <?= $item['price'] ?></p>


    <button id="<?= $item['id'] ?>"  class="action">Купить</button>


    <hr>
<? endforeach; ?>


</div>