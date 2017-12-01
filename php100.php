
<?php

echo "<br>Please Enter the number of stairs: <br>";

$stairs = fgets(STDIN, 255);

echo "<br>You enter the " . $stairs . "<br>And now look at you result: <br><br>";

/* Ещё есть такой вариант:
  function readline() {
        //открываем поток ввода
        $stdin = fopen('php://stdin', 'r');
        $data = fgets($stdin, 255);
        fclose($stdin);
        return $data;
    }
Смысл в том, что для константы STDIN требуется модуль CLI. Но можно не волноваться, т.к. этот модуль уже более 10 лет входит в дистрибутив php по умолчанию.
*/

if ($stairs < 1) {
	echo "The entered value must be bigger than 0<br>";
}
else if ($stairs >= 10) {
    echo "The entered value must be smaller than 10<br>";
}
else
{
	for ($z = 0; $z < $stairs; $z++)
    {
        for($y = 0; $y < $stairs-($z+1); $y++)
        {
// stairs-(z+1) == для того, чтобы успевать вписываться в каждый цикл
// z+1 == с учётом того, что в строке должен быть ещё один, другой символ (~)
            echo "&nbsp";
// &nbsp - символ пробела в PHP, браузеры не отображают если написать: " " (перед словом)
        }
        for($x = 0; $x < $z+1; $x++)
        {
// x < z+1 == для того, чтобы x отставал от сохранённого значения внешнего цикла
            echo '~';
        }
// но нам нужно как-то достроить узор для симметрии:
        for($secret = 0; $secret < $z; $secret++)
        {
            echo '~';   
        }


    echo "<br>"; // This is variable "z"
    }
}
