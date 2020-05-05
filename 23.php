<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Дополнительные стили (не обязательно) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Подключаем jQuery (необходим для Bootstrap JavaScript) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<link rel='stylesheet' href='style.css'>";
<?php
//Напишите PHP цикл, который выводит числа от 1 до 100.
for ($i = 1; $i < 100; $i++) {
    echo $i;
}
echo "\n===================================================================\n";

//Напишите PHP цикл, который выводит числа от 23 до 78.
for ($i = 23; $i < 78; $i++) {
    echo $i;
}
echo "\n===================================================================\n";

//Напишите PHP цикл, который выводит ненумерованный список из 10 пунктов.
$i = 1;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}
echo "\n===================================================================\n";

//Создайте массив из 100 случайных чисел.
$art = [];
for ($i = 0; $i < 100; $i++) {
    echo $art[$i] = rand(0, 100) . " ";
}
echo "\n===================================================================\n";

//Вывести массив из предыдущего задания, при помощи цикла while
$arr = [];
do {
    $a = rand(0, 100);
    if (!in_array($a, $arr)) {
        $arr[] = $a;
    }
} while (count($arr) < 100);
print_r($arr);

echo "\n===================================================================\n";

//Вывести массив из предыдущего задания, при помощи цикла while, а потом при помощи foreach.
foreach ($art as $key => $value) {
    echo $key . "=>" . $value;
}
echo "\n===================================================================\n";

//Создайте массив из 10 строк и выведите их любым циклом внутри HTML-элемента div.
$array = ["abcde", "abc", "de", "hjjj", "g", "wer", "fdufhf", "gfgdj", "rwer", "rewrwe"];
foreach ($array as $value) {
    echo "<div>" . $value . "</div>\n";
}
echo "\n===================================================================\n";

//Создайте массив, каждый элемент которого тоже массив с ключами title, description, price.
// Выведите все элементы этого массива, так, чтобы заголовки были в HTML-элементе h2, описания в p, а цена в гиперсылке.
$array = [
    [
        'title' => 'Монитор',
        'description' => 'черный',
        'price' => '3000',
    ],
    [
        'title' => 'Чашка',
        'description' => 'зеленая',
        'price' => '1000',
    ],
    [
        'title' => 'Наушники',
        'description' => 'белые',
        'price' => '2000',
    ],
];

//При выводе элементов из предыдущего задания покрасьте фон элементов ниже определенной цены в отличный от других цвет.
foreach ($array as $key => $value) {
    if ($value['price'] > 2000) {
        echo "<h2 style='color: red'>" . $value['title'] . "</h2>\n
            <p>" . $value['description'] . "</p>\n
            <a href=''>" . $value['price'] . "</a>";
    } else {
        echo "<h2 style='color: blue'>" . $value['title'] . "</h2>\n
            <p>" . $value['description'] . "</p>\n
            <a href=''>" . $value['price'] . "</a>";
    }
}
echo "\n===================================================================\n";

//Создайте масcив из 50 случайных чисел от 0 до 100. Найти все числа меньшие 72 и поместить их в отдельный массив
$arr = [];
$dir = [];

for ($i = 0; $i < 50; $i++) {
    $a = rand(0, 100);
    if ($a < 72) {
        $dir[$i] = $a;
    } else {
        $arr[$i] = $a;
    }
}
print_r($arr);
print_r($dir);
echo "\n===================================================================\n";

//Создайте цикл, который выводит числа то 0 до 100 в HTML-элементах div; окраска HTML-элементов должна чередоваться («зебра»).
for ($i = 0; $i < 100; $i++) {
    if ($i % 2 == 0) {
        echo "<div style='color: red'>" . $i . "</div>";
    } else {
        echo "<div style='color: black'>" . $i . "</div>";
    }
}
echo "\n===================================================================\n";

//Создать цикл, которые выводит 20 фрагментов разметки Bootstrap — http://getbootstrap.com/components/#thumbnails-custom-content
for ($i = 0; $i < 20; $i++)
    echo "<div class=\"alert alert-primary\" role=\"alert\">
 A simple primary alert—check it out!</div>";

echo "\n===================================================================\n";

//Создать массив с названиями и адресами ссылок . Вывести этот массив в виде выпадающего меню Bootstrap http://getbootstrap.com/components/#dropdowns
$array = [

        'Action' => 'https://getbootstrap.com/',
        'Another action' => 'https://translate.google.com/',
        'Something else here' => 'https://www.php.net/',
];
foreach ($array as $key=>$value){
   echo "\n<div class=\"btn-group\"><br>
  <button type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" >
    Action
  </button>
  <div class=\"dropdown-menu\">
    <a class=\"dropdown-item\" href='".$value."'>".$key."</a>
  </div>
</div>";
}
echo "\n===================================================================\n";

//Вывести календарь на текущий месяц . Разметку взять тут http://htmllab.ru/calendar-html/
/*
$day = [
  'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'
];

"<div class="calendar">
		<table>
		<caption><span>Май</span> 2020</caption>
			<tr>
				<th>Пн</th>
				<th>Вт</th>
				<th>Ср</th>
				<th>Чт</th>
				<th>Пт</th>
				<th>Сб</th>
				<th>Вс</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>1</td>
				<td>2</td>
			</tr>
			<tr>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				<td>8</td>
				<td>9</td>
			</tr>
			<tr>
				<td>10</td>
				<td>11</td>
				<td>12</td>
				<td>13</td>
				<td>14</td>
				<td>15</td>
				<td>16</td>
			</tr>
			<tr>
				<td>17</td>
				<td>18</td>
				<td>19</td>
				<td>20</td>
				<td>21</td>
				<td>22</td>
				<td>23</td>
			</tr>
			<tr>
				<td>24</td>
				<td>25</td>
				<td>26</td>
				<td>27</td>
				<td>28</td>
				<td>29</td>
				<td>30</td>
			</tr>
			<tr>
				<td>31</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</div>"*/


//Взять текст с Яндекс . Рефератов .Задать ключевое слово и записать в массив все расположения этого ключевого слова.
$muz = file_get_contents('text.txt');

$muz = explode(" ", $muz);
print_r($muz);
$arr = [];
foreach ($muz as $key => $value) {
    if(str_replace(',', '', $value) == 'музыка') {
        $arr[$key] = $value;
    }
}

foreach ($arr as $key => $value) {
}
$muz = implode(" ", $muz);
$muz = str_replace('музыка','<mark style="color: blue">музыка</mark>',$muz);
echo $muz;

