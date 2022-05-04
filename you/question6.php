<?php
$conection = new PDO('mysql:host=localhost; dbname=quiz; charset=utf8', 'root', '');
$question = $conection->query("SELECT * FROM question7");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/question6.css">
    <title>Document</title>
</head>

<header>
    <div class="header">
        <div class="ss">
            <a class="text" href="/yes.html">На главную</a>
            <img class="img2" src="/img/a.png" alt="">
            <a class="text" href="/contakt.html">Контакты</a>
        </div>
    </div>
</header>

<body>
    <div class="question">
        <div class="one">
            <p>Как называется государственный природный национальный парк, образованный на территории Златоуста?</p>
        </div>
        <div class="tow">
            <p><a href="/you/question7.php">Таганай</a></p>
            <p><a href="/no/no 6.html">Имени П.П.Бажова</a></p>
            <p><a href="/no/no 6.html">Крылатко</a></p>
            <p><a href="/no/no 6.html">Молодёжный</a></p>
        </div>
    </div>
</body>
</html>