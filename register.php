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
       <!--注册页CSS-->
       <link rel="stylesheet" type="text/css" href="./Css/xw_regsiter.css">
       <!--jquery-3.2.0-->
       <script type="text/javascript" src="./js/jquery-3.2.0.min.js"></script>
   </head>
   <body>
   <?php
   include_once ("./Common/xw_index_header.php");
   ?>
   <!--注册-->
   <div id="register_content">
       <div class="register_left">
           <form id="register_form" method="post">
               <p class="pass_general_error_wrapper">
                   <span class="pass_general_error_content">
                   </span>
               </p>
               <p id="hidden_fields">
                   <input name="u" type="hidden">
               </p>
               <p class="form_item_user_name">
                   <label class="form_user_name_label">
                       用户名
                   </label>
                   <!--用户名input框-->
                   <input name="form_user_name_inputname" class="form_user_name_input form_user_name_input_focus" type="text" placeholder="请设置用户名">
                   <!--显示清除图标-->
                   <span class="form_user_name_clear_btn_span"></span>
                   <!--右侧提示信息-->
                   <span class="form_user_name_notice_span">用户名仅支持中英文、数字和下划线,且不能为纯数字</span>
               </p>
           </form>
       </div>
   </div>
   </body>
</html>