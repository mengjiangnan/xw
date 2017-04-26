<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/24
 * Time: 9:18
 */
?>
<!DOCTYPE HTML>
<html>
   <head>
       <title>
           register
       </title>
       <!--标题图标-->
       <link rel="shortcut icon" href="./Image/icon/xw_title_icon.ico" type="image/x-icon">
       <!--顶部导航CSS-->
       <link rel="stylesheet" type="text/css" href="./Css/xw_index.css">
       <!--jquery-3.2.0-->
       <script type="text/javascript" src="./js/jquery-3.2.0.min.js"></script>
   </head>
   <body>
   <?php
   include_once ("./Common/xw_index_header.php");
   ?>
   <!--注册-->
   <div id="regedit_content">
       <form id="register_form" method="post">
           <p class="pass_general_error_wrapper">
               <span class="pass_general_error_content"></span>
           </p>
       </form>
   </div>
   </body>
</html>