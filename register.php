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
                   <input name="form_user_name_inputname" id="form_user_name_input_id" class="form_user_name_input" type="text" placeholder="请设置用户名">
                   <!--显示清除图标-->
                   <span class="form_user_name_clear_btn_span"></span>
                   <!--右侧普通提示信息-->
                   <span class="form_user_name_normal_notice_span">中英文均可，最长7个汉字或14个英文</span>
                   <!--右侧错误提示信息-->
                   <span class="form_user_name_error_notice_span">用户名不能超过7个汉字或14个字符</span>
                   <!--右侧用户名重复提示信息-->
                   <span class="form_user_name_repeat_notice_span">此用户名太受欢迎,请更换一个</span>
                   <!--右侧用户名可用提示信息-->
                   <span class="form_user_name_success_notice_span"></span>
               </p>
               <div class="pass_suggest_name_div">
                   <p class="pass_suggest_item">
                       <label name="suggestName">
                           <input name="suggestName" id="pass_suggest_item_radio_01" class="pass_suggest_item_radio" type="radio">
                       </label>
                   </p>
                   <p class="pass_suggest_item">
                       <label name="suggestName">
                           <input name="suggestName" id="pass_suggest_item_radio_02" class="pass_suggest_item_radio" type="radio">
                       </label>
                   </p>
                   <p class="pass_suggest_item">
                       <label name="suggestName">
                           <input name="suggestName" id="pass_suggest_item_radio_03" class="pass_suggest_item_radio" type="radio">
                       </label>
                   </p>
               </div>
           </form>
       </div>
   </div>
   <script>
   /*焦点在input框内时边框颜色变为蓝色，当焦点离开input框时，边框颜色还原为灰色*/
   var text = $(".form_user_name_input");
   var inner_input = $(".form_user_name_clear_btn_span");
   text.focus(function () {
       text.css("border-color","#3079ED");
       $(".form_user_name_normal_notice_span").css("display","block");
       $(".form_user_name_error_notice_span").css("display","none");
       $(".form_user_name_repeat_notice_span").css("display","none");
       $(".form_user_name_success_notice_span").css("display","none");
   }).blur(function () {
       text.css("border-color","#ddd");
       $(".form_user_name_normal_notice_span").css("display","none");
       /*input框提交AJAX请求*/
       $.post(
           "./Ajax/xw_register_ajax_username_verify.php",
           $('#form_user_name_input_id').serialize()+'&active='+$(event.target).attr('id'),
           function (data) {
               var code = $(data)[0].nodeName.toLowerCase();
               if(code=='success'){
                   $(".form_user_name_repeat_notice_span").css("display","block");
               }else if(code=='error'){
                   $(".form_user_name_repeat_notice_span").css("display","none");
                   $(".form_user_name_success_notice_span").css("display","block");
               }else{
                   $(".form_user_name_repeat_notice_span").css("display","none");
               }
           }
       );
   });
   /*当input框内有值的时候，清除按钮显示*/
   text.bind("input propertychange",function () {
       if(text.val().length!==0){
           inner_input.show();
       }if(text.val().length>=14){
           $(".form_user_name_normal_notice_span").css("display","none");
           $(".form_user_name_error_notice_span").css("display","block");
       }else {
           $(".form_user_name_error_notice_span").css("display","none");
       }
   });
   /*input框内清除按钮点击后，input框内容为空，提示隐藏，清除按钮隐藏*/
   inner_input.click(function () {
       text.val('');
       inner_input.hide();
       $(".form_user_name_error_notice_span").css("display","none");
       $(".form_user_name_normal_notice_span").css("display","none");
       $(".form_user_name_repeat_notice_span").css("display","none");
       $(".form_user_name_success_notice_span").css("display","none");
   });
   </script>
   </body>
</html>