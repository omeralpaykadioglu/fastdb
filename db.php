<?php

$host_name = 'localhost';
$host_id   = 'root';
$host_pw   = '';
$host_db   = 'veritabani';

try {
	$db = new PDO("mysql:host=$host_name;dbname=$host_db;charset=utf8", $host_id, $host_pw);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	die("Bağlantı sırasında hata oluştu,lütfen daha sonra tekrar deneyiniz.");
}

function run($sql, $args = NULL)
{
	global $db;

	if (!$args)
	{
		return $db->query($sql);
	}
	$stmt = $db->prepare($sql);
	$stmt->execute($args);
	return $stmt;
}
