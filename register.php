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
   <div class="register_content_div" id="register_content">
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
                   <input name="form_user_name_inputname" class="form_user_name_input" type="text" placeholder="请设置用户名">
                   <!--显示清除图标-->
                   <span class="form_user_name_clear_btn_span"></span>
                   <!--右侧提示信息-->
                   <span class="form_user_name_notice_span">用户名不能超过7个汉字或14个字符</span>
               </p>
           </form>
       </div>
   </div>
   <script>
   /*焦点在input框内时边框颜色变为蓝色，当焦点离开input框时，边框颜色还原为灰色*/
   var text = $(".form_user_name_input");
   var inner_input = $(".form_user_name_clear_btn_span");
   text.focus(function () {
       text.css("border-color","#3079ED");
   }).blur(function () {
       text.css("border-color","#ddd");
   });
   /*当input框内有值的时候，清除按钮显示*/
   text.bind("input propertychange",function () {
       if(text.val().length!==0){
           inner_input.show();
       }if(text.val().length>=14){
           $(".form_user_name_notice_span").css("display","block");
       }else {
           $(".form_user_name_notice_span").css("display","none");
       }
   });
   /*input框内清除按钮点击后，input框内容为空，提示隐藏，清除按钮隐藏*/
   inner_input.click(function () {
       text.val('');
       inner_input.hide();
       $(".form_user_name_notice_span").css("display","none");
   });
   </script>
   </body>
</html>