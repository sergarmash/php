<?php 
//1. Создайте переменную name и присвойте ей значение, содержащее ваше имя, например "Иннокентий".
$name = "Вася";
//2. Создайте переменную age и присвойте ей значение, содержащее ваш возраст, например 20.
$age = 15;
//3. Выведите с помощью echo фразу "Меня зовут: %ваше_имя%", например: "Меня зовут: Иннокентий".
echo "Меня зовут $name </br>";
//4. Выведите фразу "Мне %ваш_возраст% лет", например: "Мне 20 лет".
echo "Мне $age лет</br>";
//5. Напишите конструкцию if, которая выводит фразу: "Вам еще работать и работать" при условии, что значение переменной age попадает в диапазон чисел от 18 до 59 (включительно).
if ($age >= 18 && $age <= 59)
// 6. Расширьте конструкцию if из п.5, выводя фразу: "Вам пора на пенсию" при условии, что значение переменной age больше 59.
	echo "Вам еще работать и работать</br>";
elseif ($age >=0 && $age <=17)
//7. Расширьте конструкцию if из п.5-6, выводя фразу: "Вам еще рано работать" при условии, что значение переменной age попадает в диапазон чисел от 0 до 17 (включительно).
    echo "Вам еще рано работать </br>";
elseif ($age <=0)
//8. Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, что значение переменной age является отрицательным числом,
// ------------------------------ или вовсе числом не является.
    echo "Неизвестный возраст </br>";
else
    echo "Вам пора на пенсию </br>";
//9. Создайте переменную day и присвойте ей произвольное числовое значение.
$day = 6;
echo "day = $day </br>";
//10. С помощью конструкции switch выведите фразу: "Это рабочий день", если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно).
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
       echo "Это рабочий день<br><br>";
       break;
//11. С помощью конструкции switch выведите фразу: "Это выходной день", если значение переменной day попадает в диапазон чисел от 6 до 7 (включительно).
    default:
        echo "Неизвестный день<br><br>";
        break;
    //12. С помощью конструкции switch выведите фразу: "Неизвестный день", если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно).
}

$s = 120;
$t = 2;
echo "$s км длинна участка <br> $t время движения в часах <br>";

$speed = $s/$t;
echo "Скорость автомобиля сотавляет $speed км/час<br>";

$speed2 = $speed*1000/3600;
echo "и $speed2 м/сек<br>";
//13. Заданы две переменные: s - длина участка, который проехал автомобиль; t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.

$foo = 'bar';
$bar = 10;
echo $foo;



//14. Задана переменная $foo = 'bar'; Создать переменную bar, в которой будет храниться число 10. Вывести число 10, используя только переменную $foo (не опечатка).








//15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
//На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.


//16. Создайте две переменные $a и $b, значения которых будут числами. Выведите максимальное число из этих двух.

//17. Создайте две переменные $a = '78' (строковый тип) и $b = 78 (целочисленный тип). Проверьте эти две переменные на равность, с помощью if выведите "равны" или "не равны".

//18. Создайте две переменные $a = '78' (строковый тип) и $b = 78 (целочисленный тип). Проверьте эти две переменные на эквивалентность, с помощью if выведите "эквивалентны" или "не эквивалентны".

//19. Выведите результат сравнения $a и $b из п.17 с помощью var_dump.

//20. Приведите число 20 к типу boolean. Объясните результат.

//21. Приведите число 0 к типу boolean. Объясните результат.

//22. Приведите число -20 к типу boolean. Объясните результат.

//23. Напишите 3 строки, используя три разные функции для вывода текста.

//24. Создайте в файле 3 комментария тремя разными типами.

//25. Приведите пример, чем отличается &lt;?php от &lt;?=.

//26. Объявите константу DAYS_COUNT равную 7 и константу MONTH_COUNT равную 12 двумя разными способами объявления констант.

//27. Выполните скрипт по задаче №4 из консоли (необходимо запустить php скрипт по задаче №4 из командной строки).

 ?>