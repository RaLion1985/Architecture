<h2>Корзина</h2>
<?if ($count!=0) :?>
    <form action="/orders/MakeOrder" method="post">
        <input type="text" name="session" hidden value="<?=$session?>">
        <input type="text" name="name" placeholder="Имя"><br>
        <input type="text" name="lastName" placeholder="Фамилия"><br>
        <input type="text" name="phone" placeholder="Телефон"><br>
        <button>Оформить заказ</button>
    </form>


<?endif;?>

<?php foreach ($products as $product): ?>
<h2><?=$product['name']?></h2>
    <img src="/goods_img/small/<?=$product['img']?>" alt="Image">
<p>Описание:<?=$product['description']?> </p>
<p>Цена: <?=$product['price']?> </p>

    <button id="<?=$product['id_basket']?>" class="delete">Удалить</button>
<?endforeach;?>

