<html>
<head>
    <title>Students App</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="/css/style.css"/>
</head>
<body>

<header class="main">
    <a class="logo" href="/">КА "ШАГ"</a>
    <nav class="main-menu">
        <ul>
            <? if(isset($_SESSION['userName'])) { ?>
                <li>
                    <a href="/user/list/">Пользователи</a>
                </li>
                <li>
                    <a href="/auth/logout/">Выйти(<?=$_SESSION['userName']?>)</a>
                </li>
            <? } else { ?>
                <li>
                    <a href="/auth/register/">Регистрация</a>
                </li>
                <li>
                    <a href="/auth/login/">Войти</a>
                </li>
            <? } ?>
            <!--<li>
                <a href="#students">Студентам</a>
                <ul>
                    <li><a href="#students/lk">Личный кабинет</a></li>
                    <li><a href="#students/schedule">Расписание</a></li>
                </ul>
            </li>-->
        </ul>
    </nav>
</header>
<section class="main">

    <? include $filePath; ?>

</section>
</body>
</html>