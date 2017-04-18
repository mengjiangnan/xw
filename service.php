<?php
/*
 * 验证用户
*/
include_once dirname (__FILE__).'/Conf/conn.php'; //引入数据库连接文件

if (isset($_POST['user_name'],$_POST['user_pwd'])){
      extract($_POST);
      if (isset($_POST['user_name'],$_POST['user_pwd'])){
          $sql = "SELECT COUNT(id) FROM xw_user_auth WHERE user_name = '$user_name' AND user_password =md5('$user_pwd')";
          $stmt = $dbh->prepare($sql);
          $stmt ->execute();
          //取得行数
          $result = $stmt ->fetchColumn();
          if ($result==1){
              session_start();
              $_SESSION['user_name']=$user_name;
              die("<success />");
          }
          else die("<error />");
      }
  }
?>