<?php
include ('engine/api/api.class.php');
require_once 'connect.php'; // подключаем скрипт
	$type = "permgroup";
	$item = "group-SuperVip-until";
	$group = "SuperVip";
	$player = $member_id['name'];
	$amount = 1;
	$extra = NULL;
	$price = 2500;
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
	$link100 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link100)); 
    
    // создание строки запроса
    $query100 ="INSERT INTO permissions_inheritance VALUES('', '$uuid','$group',1,NULL)";
     
    // выполняем запрос
    $result100 = mysqli_query($link100, $query100) or die("Ошибка " . mysqli_error($link100)); 
    if($result100)
    {
        echo $balance;
    }
	mysqli_close($link100);
	$types = "item";
	$items = "4252";
	$amounts = 4;
	$extras = NULL;
	$link101 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link101));
	$query101 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result101 = mysqli_query($link101, $query101) or die("Ошибка " . mysqli_error($link101)); 
    if($result101)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link101);
	$types = "item";
	$items = "4253";
	$amounts = 4;
	$extras = NULL;
	$link102 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link102));
	$query102 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result102 = mysqli_query($link102, $query102) or die("Ошибка " . mysqli_error($link102)); 
    if($result102)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link102);
	$types = "item";
	$items = "4254";
	$amounts = 4;
	$extras = NULL;
	$link103 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link103));
	$query103 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result103 = mysqli_query($link103, $query103) or die("Ошибка " . mysqli_error($link103)); 
    if($result103)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link103);
	$types = "item";
	$items = "4255";
	$amounts = 4;
	$extras = NULL;
	$link104 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link104));
	$query104 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result104 = mysqli_query($link104, $query104) or die("Ошибка " . mysqli_error($link104)); 
    if($result104)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link104);
	$types = "item";
	$items = "229:9";
	$amounts = 1;
	$extras = NULL;
	$link105 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link105));
	$query105 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result105 = mysqli_query($link105, $query105) or die("Ошибка " . mysqli_error($link105)); 
    if($result105)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link105);
	$types = "item";
	$items = "264";
	$amounts = 512;
	$extras = NULL;
	$link106 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link106));
	$query106 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result106 = mysqli_query($link106, $query106) or die("Ошибка " . mysqli_error($link106)); 
    if($result106)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link106);
	$types = "item";
	$items = "388";
	$amounts = 128;
	$extras = NULL;
	$link107 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link107));
	$query107 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result107 = mysqli_query($link107, $query107) or die("Ошибка " . mysqli_error($link107)); 
    if($result107)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link107);
	$types = "item";
	$items = "4729";
	$amounts = 256;
	$extras = NULL;
	$link108 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link108));
	$query108 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result108 = mysqli_query($link108, $query108) or die("Ошибка " . mysqli_error($link108)); 
    if($result108)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link108);
	$types = "item";
	$items = "4311";
	$amounts = 4;
	$extras = NULL;
	$link109 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link109));
	$query109 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result109 = mysqli_query($link109, $query109) or die("Ошибка " . mysqli_error($link109)); 
    if($result109)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link109);
	$types = "item";
	$items = "4310";
	$amounts = 4;
	$extras = NULL;
	$link110 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link110));
	$query110 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result110 = mysqli_query($link110, $query110) or die("Ошибка " . mysqli_error($link110)); 
    if($result110)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link110);
	$types = "item";
	$items = "4197";
	$amounts = 4;
	$extras = NULL;
	$link111 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link111));
	$query111 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result111 = mysqli_query($link111, $query111) or die("Ошибка " . mysqli_error($link111)); 
    if($result111)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link111);
	$types = "item";
	$items = "4217";
	$amounts = 4;
	$extras = NULL;
	$link112 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link112));
	$query112 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result112 = mysqli_query($link112, $query112) or die("Ошибка " . mysqli_error($link112)); 
    if($result112)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link112);
	$types = "item";
	$items = "4201";
	$amounts = 4;
	$extras = NULL;
	$link113 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link113));
	$query113 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result113 = mysqli_query($link113, $query113) or die("Ошибка " . mysqli_error($link113)); 
    if($result113)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link113);
	$types = "money";
	$items = "200000";
	$amounts = 200000;
	$extras = NULL;
	$link114 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link114));
	$query114 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result114 = mysqli_query($link114, $query114) or die("Ошибка " . mysqli_error($link114)); 
    if($result114)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link114);
	$types = "item";
	$items = "4248";
	$amounts = 1;
	$extras = NULL;
	$link115 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link115));
	$query115 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result115 = mysqli_query($link115, $query115) or die("Ошибка " . mysqli_error($link115)); 
    if($result115)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link115);
	$types = "item";
	$items = "4249";
	$amounts = 1;
	$extras = NULL;
	$link116 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link116));
	$query116 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result116 = mysqli_query($link116, $query116) or die("Ошибка " . mysqli_error($link116)); 
    if($result116)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link116);
	$types = "item";
	$items = "4901";
	$amounts = 1;
	$extras = NULL;
	$link117 = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link117));
	$query117 ="INSERT INTO shopcart VALUES('', '$types','$items','$player','$amounts','$extras')";
     
    // выполняем запрос
    $result117 = mysqli_query($link117, $query117) or die("Ошибка " . mysqli_error($link117)); 
    if($result117)
    {
        echo $balance;
    }
    // закрываем подключение
    mysqli_close($link117);
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