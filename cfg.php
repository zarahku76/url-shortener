<?php
if(!defined('CFG')){
	die();
}
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PWD', '');
define('MYSQL_DB', 'urls');
$mysqli = mysqli_connect(
	MYSQL_HOST,
	MYSQL_USER,
	MYSQL_PWD,
	MYSQL_DB
);
if(mysqli_connect_errno()){
	echo mysqli_connect_error();
	die();
}