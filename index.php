<!DOCTYPE html>
<html>
<head>
    <title>PHP Test</title>
</head>
<body>
    <?php
        // Задание 1: Выведите на экран „Период отпусков закончился!” используя echo и print
        echo 'Период отпусков закончился! <br>';
        print 'Период отпусков закончился! <br>';

        // Задание 3: Определите 2 переменные PHP: одна целочисленное со значением 288 и одна строчного типа – ”Все возвращаются на работу!”
        $boop = 288;
        $hmmm = "Все возвращаются на работу";

        // Задание 4: Выведите эти 2 значения на экран, каждую с новой строки
        echo "<br>";
        echo $boop;
        echo "<br>";
        echo $hmmm;
        echo "<br>";

        // Задание 5: Потом выведите на экран строку, состоящую из значения первой переменной в конкатенации со второй, и
        // дополнительного текста, так что бы вывести следующий текст ”В 288 день, приблизительно ... Все
        // возвращаются на работу!”
        echo $boop . $hmmm;
        echo "<br>";
        echo "В $boop день, приблизительно ... $hmmm <br>";
        echo "<br>";

        // Задание 6: Выведите на экран, используя echo, сумму чисел 45+67, используя следующий синтаксис: echo 45+67. Потом
        // попробуйте вывести результат так echo „45+67” и echo ‚45+67’. Пронаблюдайте разницу в выводах
        echo 45 + 67;
        echo "<br>";
        echo "45 + 67";
        echo "<br>";
        echo '45 + 67';
        echo "<br>";

        // Задание 7: Выведите на экран следующее предложение Книга “Герой” выйдет в октябре, этого года! Используйте
        // правильно кавычки!
        echo "Книга \"Герой\" выйдет в октябре, этого года! <br>";

        // Задание 8: Добавьте стих и выведите его правильно
        echo "<br>";
        echo "Ее глаза на звезды не похожи <br>
        Нельзя уста кораллами назвать,<br>
        Не белоснежна плеч открытых кожа,<br>
        И черной проволокой вьется прядь.<br>
        <br>
        С дамасской розой, алой или белой,<br>
        Нельзя сравнить оттенок этих щек.<br>
        А тело пахнет так, как пахнет тело,<br>
        Не как фиалки нежный лепесток.<br>
        <br>
        Ты не найдешь в ней совершенных линий,<br>
        Особенного света на челе.<br>
        Не знаю я, как шествуют богини,<br>
        Но милая ступает по земле.<br>
        <br>
        И все ж она уступит тем едва ли,<br>
        Кого в сравненьях пышных оболгали.<br>";
    ?>
</body>
</html>