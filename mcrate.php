<?php
include ('engine/api/api.class.php');
require_once 'connect.php'; // подключаем скрипт
	$type = "item";
	$item = "4225";
	$player = 'myexbf';
	$extra = '';
	$price = 500;
	$balance = 0;
	$link = mysqli_connect($host, $user, $password, $database);
    $query ="INSERT INTO shopcart VALUES('', '$type','$item','$player','$amount','$extra')";
    $result = mysqli_query($link, $query);
    mysqli_close($link);
	header('Location: https://sacreland.ru/success.html');
}
else header('Location: https://sacreland.ru/fail.html');
	}
	else header('Location: https://sacreland.ru/amount.html');
}
?>