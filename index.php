<?php
  include_once './xw_index_title_class.php'; //引入首页标题类文件
  $my_class = new index_title();
  $my_class->setTitle('xw');
  $xw_index_title = $my_class->getTitle();
?>
<!DOCTYPE HTML>
<html>
 <head>
       <title>
           <?php
           echo $xw_index_title;
           ?>
       </title>
       <!--字符编码utf-8-->
       <meta charset="UTF-8">
       <!--标题图标-->
       <link rel="shortcut icon" href="./Image/icon/xw_title_icon.ico" type="image/x-icon">
       <!--顶部导航CSS-->
       <link rel="stylesheet" type="text/css" href="./Css/xw_index.css">
       <!--jquery-3.2.0-->
       <script type="text/javascript" src="./js/jquery-3.2.0.min.js"></script>
   </head>
 <body>
   <?php
     include_once ("./Common/xw_index_header.php"); //引入头部通用导航样式
   ?>
 </body>
</html>
