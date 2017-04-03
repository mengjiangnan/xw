<?php
  include_once dirname (__FILE__).'/Conf/conn.php'; //引入数据库连接文件
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
       <!--标题图标-->
       <link rel="shortcut icon" href="./Image/icon/xw_title_icon.ico" type="image/x-icon">
       <!--顶部导航CSS-->
       <link rel="stylesheet" type="text/css" href="./Css/xw_index.css">
       <!--jquery-3.2.0-->
       <script type="text/javascript" src="./js/jquery-3.2.0.min.js"></script>
   </head>
 <body>
   <div class="top_nav" id="nav_outside">
       <div class="top_nav_inner" id="nav_inner">
           <ul class="top_nav_ul" id="nav_ul">
               <li class="top_logo" id="logo">
                   <a class="top_li_first" id="li_first_a">
                       <!--<img src="./Image/logo/xw_icon_test1.png">-->
                       <img src="./Image/logo/index_logo.svg" width="40" />
                   </a>
               </li>
               <li class="top_li_second" id="li_second">
                   <a class="top_li_second_a" id="li_second_a">
                       我的最爱
                   </a>
               </li>
               <li class="top_li_three" id="li_three">
                   <a class="top_li_three_a" id="li_three_a">
                       我关注的
                   </a>
               </li>
               <li class="top_li_four" id="li_four">
                   <a class="top_li_four_a" id="li_four_a">
                       我的收藏
                   </a>
               </li>
               <li class="top_li_five" id="li_five">
                   <a class="top_li_five_a" id="li_five_a">
                       手机版
                   </a>
               </li>
               <li class="top_search" id="li_search">
                   <a class="top_search_a">
                   </a>
               </li>
               <li class="top_list" id="li_list">
                   <a>
                   </a>
               </li>
           </ul>
           <!--搜索-->
           <form action="">
               <div class="search_main">
                   <!--<button class="search_btn" type="submit"></button>-->
                   <button class="search_btn" disabled="disabled"></button>
                   <input class="search_text" type="text" placeholder="搜索">
                   <span class="inner_input" id="inner_input_span">清除</span>
                   <span class="close_btn_search"></span>
               </div>
           </form>
           <!--会员登录-->
           <div class="member" id="member_div">
               <p>会员中心</p>
               <ul>
                   <li>
                       <img alt="" src="./Image/other_img/member_login.svg" width="15">
                       <a class="theme-login">登录</a>
                   </li>
                   <li>
                       <img alt="" src="./Image/other_img/member_regedit.svg" width="15">
                       <a>新会员注册</a>
                   </li>
               </ul>
           </div>
       </div>
   </div>
   <div class="theme-popover">
       <div class="theme-poptit">
           <a title="关闭" class="close_pop">x</a>
           <h3>xw登录</h3>
       </div>
       <div class="theme-popbod">
           <form name="login_form" class="theme_signin" action="" method="post">
               <ul>
                   <li>
                       <strong>
                           用户名:
                       </strong>
                       <input name="user_name" class="user_name_input" type="text" size="20" value="test">
                   </li>
                   <li>
                       <strong>
                           密码：
                       </strong>
                   </li>
                   <li>
                       <input name="submit" class="btn_login" type="submit" value="登录">
                   </li>
               </ul>
           </form>
       </div>
   </div>
   <div class="theme-popover-mask"></div>
 <script>
     /*input框内清除按钮更改*/
     var text = $(".search_text");
     var inner_input = $(".inner_input");
     text.focus(function () {
         inner_input.show();
     });
     inner_input.click(function () {
         text.val('');
         inner_input.hide();
     });
     /*搜索*/
     $(document).ready($(function () {
         $(".top_search_a").click(function () {
             $(".search_main").fadeIn(1000);
             inner_input.hide();
         });
         $(".search_main .close_btn_search").click(function () {
             $(".search_main").fadeOut(500);
         });
         /*登录*/
         $(".top_list a").on("click", function(e){
             if($(".member").is(":hidden")){
                 $(".member").slideDown();
             }else{ $(".member").slideUp();
             }
             $(document).one("click", function(){
                 $(".member").slideUp();
             });
             e.stopPropagation();
         });
     }));
     /*登录按钮弹出登录界面*/
     $(document).ready(function () {
         $(".theme-login").click(function () {
             $(".theme-popover-mask").fadeIn(100);
             $(".theme-popover").slideDown(200);
         })
         $(".theme-poptit .close_pop").click(function () {
             $(".theme-popover-mask").fadeOut(100);
             $(".theme-popover").slideUp(200);
         })
     })
 </script>
 </body>
</html>
