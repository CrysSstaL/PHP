<?php

echo "#1";

$very_bad_unclear_name = "15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= ", shaken but not stirred";
echo "\nYour order is: $very_bad_unclear_name.\n";

echo "#2";

$first = 4;
$second = 4.4;
$last_month = 1187.23;
$this_month = 1089.98;
echo "\nfirst= $first\n";
echo "second = $second\n";
echo 4*3,"\n";
echo "В прошлом месяце я потратил на ", ($last_month-$this_month), " больше, чем в этом!!!\n";

echo "#11";

$num_languages = 4;
$months = 11;
$days = 16 * $months;
$days_per_language = $days / $num_languages;
echo "\ndays_per_language = $days_per_language\n";

echo "#12";

echo  8**2;

echo "#13";

$my_num = 917;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "\n$answer\n";

echo "#14";

$a = 10;
$b = 3;
echo  $a % $b ;
if( $a % $b == 0) {
    echo "делится", $a / $b, "\n";
} else {
    echo "делится с остатком ", $a % $b, "\n";
}

$st = pow(2, 10);
echo "2^10 = ", $st, "\n";

echo "square root of 245 = ", sqrt(245), "\n";

$arr = Array(4,2,5,19,13,0,10);
$res = 0;
foreach ($arr as $n) {
    $res += $n**2;
}
echo "square root of res = ", sqrt($res), "\n";

echo "square root of 379 = ", round(sqrt(379), 0), ", ",
round(sqrt(379), 1), ", ", round(sqrt(379), 2), "\n";

echo "square root of 587 = ", ceil(sqrt(587)), ", ",
floor(sqrt(379)), "\n";
$mas = Array('floor' => floor(sqrt(379)), 'ceil' =>ceil(sqrt(587)));

echo "max = ", max(4,-2,5,19,-130,0,10), ", min = ", min(4,-2,5,19,-130,0,10), "\n";

echo "Случайное число от 1 до 100: ", rand(1,100), "\n";

$arr = range(1,10);
for ($n=0; $n<10; $n++) {
    $arr[$n] = rand(1, 100);
    echo $arr[$n], "\n";
}
$a = rand(-100,100);
$b = rand(-100,100);
echo "|a($a) - b($b)| = ", abs($a-$b), "\n";
$arr = Array(1,2,-1,-2,3,-3);
for($n=0; $n < sizeof($arr); $n++) {
    if ($n == sizeof($arr) - 1) {
        echo abs($arr[$n]), "\n";
    }
    else {
        echo abs($arr[$n]), ", ";
    }
}

$var = 265;
$arr = Array(1);
echo 1, " ";
for($n=2; $n <= floor(sqrt($var)); $n++) {
    if($var % $n == 0) {
        array_push($arr, $n);
        echo $arr[sizeof($arr) - 1], " ";
        array_push($arr, $var / $n);
        echo $arr[sizeof($arr) - 1], " ";
    }
}
array_push($arr, $var);
echo $var, "\n";

$arr = range(1,10);
$result = $arr[0];
for($n=1; $n < 10; $n++) {
    $result += $arr[$n];
    if( $result > 10) {
        echo "Нужно сложить ", $n+1, " элементов\n";
        break;
    }
}

echo "#15";

function printStringReturnNumber(){
    echo "\nMY DEAR DIARY\n";
    return 1;
}
$my_num = printStringReturnNumber();
echo "my_num = ", $my_num, "\n";

echo "#16";

function increaseEnthusiasm($str){
    return ($str."!");
}
echo increaseEnthusiasm("MY DEAR DIARY"), "\n";
function repeatThreeTimes($str){
    return ($str.$str.$str);
}
echo repeatThreeTimes("MY DEAR DIARY "), "\n";
echo increaseEnthusiasm(repeatThreeTimes("!!!MY DEAR DEAR DIARY!!! ")), "\n";

function cut($str, $num, $default=10){
    return substr($str, 0, $num);
}

function print_arr($arr, $i){
    if($i < sizeof($arr)) {
        echo $arr[$i], " ";
        print_arr($arr, $i+1);
    }
    if($i == 0) {
        echo "\n";
    }
    return 0;
}
$arr = range(1,10);
print_arr($arr, 0);

function add($var){
    if ($var < 10) {
        return $var;
    }
    while ($var > 9) {
        $tmp = $var;
        $var = 0;
        while ($tmp != 0) {
            $var += $tmp % 10;
            $tmp = (int)($tmp / 10);
        }
    }
    return $var;
}

$res = add(259);
echo $res, "\n";

echo "#17";

$arr = Array("x");
echo $arr[0], " ";
for($n = 1; $n < 5; $n++) {
    $s = str_repeat("x", $n+1);
    array_push($arr, $s);
    echo $arr[$n], " ";
}

function arrayFill($val, $len){
    if($len > 0) {
        $arr = Array($val);
        for($n = 1; $n < $len; $n++)
        {
            array_push($arr, $val);
        }
        return $arr;
    }
}
$arr = arrayFill('x', 5);
for($n = 0; $n < 5; $n++) {
    echo $arr[$n], " ";
}

$arr = Array(array(1,2,3),
array(4,5),
array(6),
);
echo (array_sum($arr[0]) + array_sum($arr[1]) + array_sum($arr[2])), "\n";

$arr = array();
$i = 1;
for($n = 0; $n < 3; $n++) {
    array_push($arr, array());
    for($j = 0; $j < 3; $j++) {
        array_push($arr[$n], $i);
        $i++;
        echo $arr[$n][$j], " ";
    }
}

$arr = array(2,5,3,9);
$result = $arr[0]*$arr[1] + $arr[2]*$arr[3];
echo "result = ", $result, "\n";

$user = array('name'=>'Владимир', 'surname' => 'Владимирович', 'patronymic' => 'Владимиров');
echo $user['surname'], " ", $user['name'], " ", $user['patronymic'];

$date = array('year' => 2023, 'month' => 03, 'day' => 10);
echo $date['year'], ".", $date['month'], ".", $date['day'];

$arr = ['a', 'b', 'c', 'd', 'e'];
echo "Длина -", sizeof($arr);
echo "Последний элемент - ", $arr[sizeof($arr)-1], ", Предпоследний - ", $arr[sizeof($arr)-2];

echo "#18";

function MoreThanTen($a, $b){
    return (($a + $b) > 10);
}
$res = MoreThanTen(2, 11);
echo $res ? "true" : "false";

function IfEquals($a, $b){
    return ($a == $b) ;
}
$res = IfEquals(1, 0);
echo $res ? 'true' : 'false';

$test = 0;
echo (($test == 0) ? 'Верно' : '');

$age = 59;
if($age < 10 || $age > 99) {
    echo "Число меньше 10 или больше 99";
} else {
    echo ($age%10+(int)($age/10) <= 9) ? "Cумма цифр однозначна" : "Cумма цифр двузначна";
}

$arr = range(1,5);

function CheckLength($arr){
    return (sizeof($arr)==3);
}
echo (checkLength($arr) == 1) ? array_sum($arr) : 'В массиве не три элемента';
echo "\n";

echo "#19";

for($n = 1; $n <= 20; $n++) {
    for($i = 0; $i < $n; $i++) {
        echo "x";
    }
    echo "\n";
}

echo "#20";

$arr = range(1,10);
echo "Cреднее арифметическое ", (array_sum($arr) / sizeof($arr)), "\n";
echo "Cумма чисел от 1 до 100 = ", (1+100)*100/2, "\n";
$arr = array(1024, 49, 36, 100);
$arr = array_map("sqrt", $arr);
for($n=0; $n < sizeof($arr); $n++) {
    echo $arr[$n], " ";
}
echo "\n";

$keys = range('a', 'z');
$values = range(1,26);
$arr = array_combine($keys, $values);
foreach($keys as $n)
{
    echo "arr[$n] = ", $arr[$n], "\t";
}
echo "\n";

$str = '1234567890';
$arr = str_split($str, 2);
$res = array_sum($arr);
echo $res, "\n";