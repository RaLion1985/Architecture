Заказы <br>
Список заказов клиентов <br>
<? foreach ($orders as $orderItem) : ?>

    Имя:<?= $orderItem['name'] ?><br>
    Фамилия:<?= $orderItem['lastname'] ?><br>
    Телефон:<?= $orderItem['phone'] ?><br>
    Статус:<?= $orderItem['status'] ?><br>
    <a href="/Orders/OrderEdit/?id=<?= $orderItem['id']?>">Редактировать заказ</a>
    <hr>
<? endforeach; ?>
