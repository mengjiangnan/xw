<?php
  include_once dirname (__FILE__).'/Conf/conn.php'; //引入数据库连接文件
  include_once './xw_index_title_class.php'; //引入首页标题类文件
  $my_class = new index_title();
  $my_class->setTitle('xw');
  $xw_index_title = $my_class->getTitle();
?>
<!Document>
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
                       <img src="./Image/logo/xw_icon_test1.png">
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
                       收藏夹
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
                   <span class="inner_input" id="inner_input_span" style="display:none">清除</span>
                   <span class="close_btn"></span>
               </div>
           </form>
           <!--会员登录-->
           <div class="member">
               <p>会员中心</p>
               <ul>
                   <li>
                       <img alt="" src="./Image/other_img">
                       <a>登录</a>
                   </li>
                   <li>
                       <img alt="" src="./Image/other_img">
                       <a>新会员注册</a>
                   </li>
               </ul>
           </div>
       </div>
   </div>
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
             $("top_nav_ul").fadeOut(500);
             $(".search_main").fadeIn(1000);
         });
         $(".search_main .close_btn").click(function () {
             $(".search_main").fadeOut(500);
             $("top_nav_ul").fadeIn(1000);
         });
         /*登录*/
         $(".top_list a").click(function () {
             $(".member").slideToggle(500);
         });
     }));
 </script>
 </body>
</html>
