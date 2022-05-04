<?php
$conection = new PDO('mysql:host=localhost; dbname=quiz; charset=utf8', 'root', '');
$question = $conection->query("SELECT * FROM question9");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/question9.css">
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
    <? foreach($question as $q)?>
        <div class="one">
            <p><?=$q['question']?></p>
        </div>
        <div class="tow">
            <p><a href="/no/no 8.html"><?=$q['answer1']?></a></p>
            <p><a href="/no/no 8.html"><?=$q['answer3']?></a></p>
            <p><a href="/you/question9.php"><?=$q['answer2']?></a></p>
            <p><a href="/no/no 8.html"><?=$q['answer4']?></a></p>
        </div>
        ?>
    </div>
</body>
</html>