<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <div class="flex-container">

        <div class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>
        </div>

        <div class="about_me">

          <h1> <?php echo $topic ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php
                    echo '<img src="img/php.jpg" alt="cat2">' . '<br>';
                    echo '<img src="img/cat7.jpg" alt="cat3">' . '<br>';
                    echo '<img src="img/cat8.jpg" alt="cat4">' . '<br>';
                    ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                          echo 'город', ' ', $city; ?> 
                    </p>

                    <p> Мне
                    <?php echo $age; ?>
                    года </p>
                    <p> Я научилась создавать переменные </p>
                    <p> Изучила простые операции с ними </p>
                </div>

                <div class="otherImg">
                    <?php
                    echo '<img src="img/cat6.jpg" alt="cat5">' . '<br>';
                    echo '<img src="img/cat2.jpg" alt="cat6">' . '<br>';
                    echo '<img src="img/cat10.jpg" alt="cat7">' . '<br>';
                    ?>
                </div>
            </div>

            <div class="knowledge">

                <?php include 'knowledge.inc.php'; ?>
                <?php
                echo $a, ' ', $b, ' ', $c;
                ?> <br>

                <?php
                    $a = 10;
                    $b = ++$a;
                    $c = &$b;
                    $c = 30;
                    echo "Число $b - является результатом присвоения значения по ссылке;";
                ?> <br>

                <?php
                    echo "Дано число: $number. ";
                    echo $first . $second . '<br>';
                    echo "Время выполнения скрипта, представленного выше: " . $timeWork . " секунд;";
                ?><br>

                <?php
                echo "Пример использования статической переменной. Не теряет своего значения, при выполнении программы: ";
                echo example(), ' ', example(), ' ', example(), '.';
                ?>

            </div>

            <div class="article">
                <p class="text">
                Это было длительное изучение модуля. Я прошла через разные стадии по отношению к нему.
                Около 3-х часов я изучала заключительные материалы, статьи по работе и настройке VS Code на английском языке.
                Как итог - короткое видео на YouTube решило мою проблему и я преисполнилась в своем познании.
                Я не жалею о проведенном времени, ведь только через такие тернии можно пробраться к звездам.
                Желание, изучать данный курс и преуспевать в нем, только прибавилось! 
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>