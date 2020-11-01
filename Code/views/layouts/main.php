<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/styles.css">
    <title>Document</title>
</head>
<body>
<a href="/">Главная</a>
<a href="/basket/">
    Корзина
</a><?=$count?>

<?if ($auth):?>
    Добро пожаловать <?=$username?> <a href="/user/logout/">[Выход]</a>
    <?if ($username == 'admin'):?>
        <a href="/orders/">Заказы</a>
    <?endif;?>
<?else:?>
    Добро пожаловать гость(-я)
    <form action="/user/login/" method="post">
        <input type="text" name="login" placeholder="Логин">
        <input type="text" name="pass" placeholder="Пароль">
        <input type="submit" name="submit" value="Войти">
    </form>
<?endif;?>

<br>
<?=$content?>
<script>
    $(document).ready(function () {
        $(".action").on('click', function (e) {
            let id = e.target.id;
            $.ajax({
                url: "/product/AddBasket/",
                type: "POST",
                dataType: "json",
                data:
                    {
                        id: id
                    },
                error:function () {alert('error');},
                success: function (answer) {
                    {window.location.reload()}

                }
            })

        });
    });

    $(document).ready(function () {
        $(".delete").on('click', function (e) {
            let id = e.target.id;
            $.ajax({
                url: "/basket/delete/",
                type: "POST",
                dataType: "json",
                data:
                    {
                        id: id
                    },
                error:function () {alert('error');},
                success: function (answer) {
                    {window.location.reload()}

                }
            })

        });
    });

    $(document).ready(function () {
        $(".changeStatus").on('click', function (e) {
            let id = e.target.id;
            $.ajax({
                url: "/orders/ChangeStatus/",
                type: "POST",
                dataType: "json",
                data:
                    {
                        id: id
                    },
                error:function () {alert('error');},
                success: function (answer) {
                    {window.location.reload()}

                }
            })

        });
    });
</script>

</body>
</html>