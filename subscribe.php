<?php
include("config.php");

if(isset($_POST['submit_form'])) {
	
	$name=$_POST["user_name"]; 
	$email=$_POST["email"]; 
	$prepared = $mysqli->prepare("insert into subscribe(name, email) values('".$name."', '".$email."')"); 

	if($prepared->execute()) 
		echo "Поздравляем! Подписка успешно оформлена! ";
	else 
		echo "Ошибка запроса";
	$prepared->close();
}
?>