<?php
/*
 * 数据库连接
 * host:数据库地址
 * dbname:数据库名称
 * port:端口号
 */
   try{
       $pdo = new PDO(
           'mysql:host=localhost;
           db_name=world;
           port=3306',
           "root", //数据库登陆名称
           "a019243a"); //数据库登陆密码
   }
   catch(PDOException $e){
       echo 'Connection failed: '.$e->getMessage(); //打印数据库连接异常信息
   }
?>