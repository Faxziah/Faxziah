<?php
	// Соединение к БД
	$connect = new mysqli ('localhost', 'test', 'test', 'test');
   
	// Переменная $sql - строка выбрать все строки из таблицы new где id > 0 сортируя по id по уменьшению и лимитом 9 новостей

	$sql = "SELECT * FROM `new` WHERE `id` > '0' ORDER BY `id` DESC";

	// Переменная $mysql - это запрос переменной $connect строкой $sql
 	$mysql = $connect->query("$sql");  

 	// Помещаем каждую строку в переменную $row, являющуюся массивом 
	while ($row = mysqli_fetch_array($mysql))
	{
		$id=$row['id'];
		$title=$row['title'];
		$photo=$row['photo'];
		$content=$row['content'];

	echo "<div><a href='https://doctor-avakyan.ru/new?id=$id'>
				<img src='$photo' alt='$title'>".
				"<h1> $title </h1>".
				"<p> $content </p>
			</a></div>";
	}
	$connect->close();
?>
