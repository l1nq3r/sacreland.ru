<?php
include ('engine/api/api.class.php');
require_once 'connect.php'; // подключаем скрипт
	$type = "money";
	$item = "money";
	$player = $member_id['name'];
	$extra = '';
	$price = 1;
	$balance = 0;
	$link = mysqli_connect($host, $user, $password, $database);
	$query ="SELECT balance FROM dle_users WHERE name = '".$member_id['name']."' ";
	$result = mysqli_query($link, $query); 
if($result){
    while ($row = mysqli_fetch_row($result)) {
        $balance = $row[0];
    }
}
if(isset($_POST['button'])){
	$amount = $_POST['amount'];
	if ($amount >= 300){
	if ($balance >= ($price*($amount/300))){
		$balance = $balance - ($price*($amount/300));
		$query ="UPDATE dle_users SET balance = $balance WHERE name='$player'";
    $result = mysqli_query($link, $query);
    $query ="INSERT INTO shopcart VALUES('', '$type','$item','$player','$amount','$extra')";
    $result = mysqli_query($link, $query);
	$totalprice = ($amount/300)*$price;
	$today = date("Y.m.d H:i:s");
	$query ="INSERT INTO shopcart_logs VALUES('', '$player','$type','$item','$amount','$totalprice','$today')";
    $result = mysqli_query($link, $query);
    mysqli_close($link);
	header('Location: https://sacreland.ru/success.html');
}
else header('Location: https://sacreland.ru/fail.html');
	}
	else header('Location: https://sacreland.ru/amount.html');
}
?>
<input type="submit" name="button" value="купить" id="productpagebuy">