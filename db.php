<?php

$dsn = 'mysql://host= localhost;dbname=company2';
$username = 'root';
$password ='';
$option = [];


try{
	$connection = new PDO($dsn,$username,$password,$option);
	
//	echo 'connection succesful';

	}catch(PDOExcption $e){
		
		
		}
		
		
		/*
	$connection = null;
try{
	$connection =  new PDO('mysql://hostbname=localhost;dbname=company2','root'
	/*,array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
	
	);
	echo 'yes';
	}catch(PDOExcepiton $e){
		}
*/