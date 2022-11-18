<?php

////echo "你好！";
////$a = "Hi";
////$b = "there ";
//
////echo "<br>";
//
//
/////echo $a . " " . $b;
//
////$a = 4;
/////$b = 5;
//
////echo "<br>" . $a + $b . "<br>";
////echo $a - $b . "<br>";
////echo $a * $b . "<br>";
////echo $a / $b . "<br>";
////echo $a ** $b . "<br>";
////echo $a % $b . "<br>";
//
////if ($a>$b) {
//  //  echo "bigger " . $a;
////}
//
////if ($b>$a) {
//   // echo "bigger " . $b;
////}
//
////else {
//  //  echo "the values are equal ";
////}
//
//function summa($arg1, $arg2) {
//    return $arg1 + $arg2;
//}
//
//function raznost($arg1, $arg2) {
//    if ($arg1 < $arg2)
//        echo "не работает";
//   return $arg1 - $arg2;
//}
//
//function umnojenie($arg1, $arg2) {
//   return $arg1 * $arg2;
//}
//
//function splitt($arg1, $arg2) {
//    if ($arg2 == 0)
//        echo "на ноль делить нельзя";
//   return $arg1 - $arg2;
//}
//
//echo "<br>";
//
////echo summa(20,10);
//
////echo "<br>";
//
////echo splitt(30,0);
//
////echo "<br>";
//
//function math($arg1, $arg2, $operation) {
//    switch ($operation) {
//        case "Сложение":
//           echo summa($arg1, $arg2);
//            break;
//       case "Разность":
//            echo raznost($arg1, $arg2);
//            break;
//        case "Умножение":
//            echo umnojenie($arg1, $arg2);
//            break;
//        case "Деление":
//            echo splitt($arg1, $arg2);
//            break;
//    
//   default:
//   echo "Что-то пошло не так:";
//}
//    
//}
//
//echo "<br>";
//echo "Оператор switch " , math(10,30,"Сложение");
//echo "<br>";
//
//echo "<br>";
//echo "Оператор switch " , math(30,10,"Разность");
//echo "<br>";
//
//echo "<br>";
//echo "Оператор switch " , math(30,10,"Умножение");
//echo "<br>";
//
//echo "<br>";
//echo "Оператор switch " , math(30,10,"Деление");
//echo "<br>";
//
// $i = 0;
//while($i<=100){
//    if($i % 3 == 0)
//        echo $i, " ";
//     $i++;
//}
//
////while
//
//
////$myarr = [];
///////var_dump($myarr);
////
////$myarr[] = true ;
////$myarr[] = 1;
////$myarr[] = "你好！";
////
//////var_dump($myarr);
////
////$arr = ["html", "css", "php", "js", "mysql"];
////
////for($i = 0; $i < count($arr); $i++) {
////echo $arr[$i]," ";
////    
////}
////
////echo "<br>";
////foreach ($arr as $item) {
////    echo $item, " ";
////}
//
//$users[0] = [
//   "name" => "Egro",
//    "email" => "Egrokreed@gmail.com"    
//];
//
//$users[1] = [
//   "name" => "nikita",
//    "email" => "nikitalubitmohito@gmail.com"    
//];
//
//$users[2] = [
//   "name" => "lucy",
//    "email" =>"lucyme@gmail.com"    
//];
//
//
//foreach ($users as $key => $item ) {
//    
//    echo " <br> key ",$key, "meaning <br> ";
//    foreach($item as $value)
//        
//        echo "meaning", $value, " ";
//}
//
//var_dump($users);

$connection = mysqli_connect("localhost","root","","frontend");
if($connection)
    echo "Подключение к БД есть. http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=frontend&table=users";

$login = $_GET['login'];
$password = $_GET['password'];
if ($login && $password) {
    echo " Dанные есть";
    $sql = "SELECT * FROM users WHERE login='{$login}' AND password='{$password}'";
    
    $query = mysqli_query($connection, $sql);
    var_dump($query);
    $result = mysqli_fetch_assoc($query);
    var_dump($result);
    foreach($result as $column => $value) {
        if($column == "full_name") {
            echo "Добро пожаловать, ", $value;
        }
    }
}
    else
        echo "Нет Dанных";
;
?>
