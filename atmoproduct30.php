<?php
include ('engine/api/api.class.php');
require_once 'connect.php'; // подключаем скрипт
	$type = "permgroup";
	$item = "group-Fly-until";
	$group = "Fly";
	$player = $member_id['name'];
	$amount = 1;
	$extra = NULL;
	$price = 250;
	$balance = 0;
	$vremya = time() + (31 * 24 * 60 * 60);
$linker = mysqli_connect($host, $user, $password, $database) 
    or die("Fail " . mysqli_error($linker));
// выполняем операции с базой данных
$queryr ="SELECT md5 FROM usersession WHERE user = '".$member_id['name']."' ";
$resulter = mysqli_query($linker, $queryr) or die("fail " . mysqli_error($linker)); 
if($resulter)
{
    echo "";
    while ($row = mysqli_fetch_row($resulter)) {
        $uuid = "$row[0]";
    }
	$uuid = substr($uuid, 0, 8)."-".substr($uuid, 8, 4)."-".substr($uuid, 12, 4)."-".substr($uuid, 16, 4)."-".substr($uuid, 20, 12);
    echo "";
     
    mysqli_free_result($resulter);
}
	// подключаемся к серверу
$link1 = mysqli_connect($host, $user, $password, $database) 
    or die("Fail " . mysqli_error($link1));
// выполняем операции с базой данных
$query1 ="SELECT balance FROM dle_users WHERE name = '".$member_id['name']."' ";
$result1 = mysqli_query($link1, $query1) or die("fail " . mysqli_error($link1)); 
if($result1)
{
    echo "";
    while ($row = mysqli_fetch_row($result1)) {
        $balance = $row[0];
    }
    echo "";
     
    mysqli_free_result($result1);
}
if(isset($_POST['button'])){
	if ($balance >= $price){
		$balance = $balance - $price;
		$link2 = mysqli_connect($host, $user, $password, $database) 
    or die("Fail " . mysqli_error($link2));
		$query2 ="UPDATE dle_users SET balance = $balance WHERE name='$player'";
    $result2 = mysqli_query($link2, $query2) or die("Ошибка " . mysqli_error($link2)); 
 
    if($result2)
        echo "<span style='color:blue;'>Данные обновлены</span>";
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
    
    // создание строки запроса
    $query ="INSERT INTO permissions VALUES('', '$uuid','$amount','$item','','$vremya')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link);
	$link100 = mysqli_connect($host, $user, $password, $database); 
    $query100 ="INSERT INTO permissions_inheritance VALUES('', '$uuid','$group',1,NULL)";
    $result100 = mysqli_query($link100, $query100); 
	mysqli_close($link100);
	$link = mysqli_connect($host, $user, $password, $database);
	$totalprice = $amount*$price;
	$today = date("Y.m.d H:i:s");
	$query ="INSERT INTO shopcart_logs VALUES('', '$player','$type','$group','$amount','$totalprice','$today')";
    $result = mysqli_query($link, $query);
	
	header('Location: https://sacreland.ru/success.html');
}
else header('Location: https://sacreland.ru/fail.html');
}
?>
<form method="POST">
<input type="submit" name="button" value="купить" id="productpagebuy">
</form>