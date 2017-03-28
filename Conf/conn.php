<?php
/*
 * 数据库连接
 * host:数据库地址
 * dbname:数据库名称
 * port:端口号
 */

$dbms = 'mysql'; //数据库类型
$host = 'localhost'; //数据库主机名称
$dbname = 'world';  //使用的数据库
$user = 'root'; //数据库连接用户名
$password = 'a019243a'; //数据库连接密码
$dbport = '3306';
$dsn = "$dbms:host=$host;dbname=$dbname;port=$dbport";

   try{
       $dbh = new PDO($dsn, $user, $password); //初始化一个pdo对象
   }
   catch(PDOException $e){
       echo 'Connection failed: '.$e->getMessage(); //打印数据库连接异常信息
   }
?>