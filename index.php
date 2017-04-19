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
           <div class="message" id="message_id"></div>
           <form name="login_form" id="login_form_id" class="theme_signin" action="" method="post">
               <div class="theme-inner">
                  <ul>
                      <li>
                        <label class="user_name_strong">用户名：</label>
                        <input name="user_name" class="user_input" id="user_name_id" type="text" size="20" value="test" >
                      </li>
                      <li>
                         <label class="user_pwd_strong">密码：</label>
                         <input name="user_pwd" class="user_input" id="user_pwd_id" type="password" size="20" value="test" >
                      </li>
                      <li>
                         <input name="submit" class="btn_login" id="submit_id" type="submit" value="登录">
                      </li>
                  </ul>
               </div>
           </form>
           <div class="barcode-img-button"></div>
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
                 //初始化message内容为空
                 $('#message_id').html('');
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
     });
     /*登录提交*/
     $(document).ready(function () {
         $('#submit_id').click(function (e) {
             var name = '登录';
             $.post('service.php',$('#login_form_id').serialize()+'&active='+$(event.target).attr('id'),function (data) {
                 var code = $(data)[0].nodeName.toLowerCase();
                 $('#message_id').removeClass('error');
                 $('#message_id').removeClass('success');
                 $('#message_id').addClass(code);
                 if (code == 'success'){
                     $('#message_id').html(name + '成功！');
                 }
                 else if (code == 'error'){
                     $('#message_id').html('用户名或密码错误!');
                 }
             });
             return e.preventDefault();
         });
     });
     /*登录框居中*/
     function tc_center() {
         var _top = ($(window).height()-$(".theme-popover").height())/2;
         var _left = ($(window).width()-$(".theme-popover").width())/2;
         $(".theme-popover").css({top:_top,left:_left});
     }
     $(window).resize(function () {
         tc_center();
     });
     /*登录框可拖动*/
     $(document).ready(function () {
         $(".theme-poptit").mousedown(function (e) {
             $(this).css("cursor","move");
             var offset = $(this).offset();
             var x = e.pageX - offset.left;
             var y = e.pageY - offset.top;
             $(document).bind("mousemove",function (ev) {
                 $(".theme-popover").stop();
                 var _x = ev.pageX - x;
                 var _y = ev.pageY - y;
                 $(".theme-popover").animate({
                     left:_x+"px",
                     top:_y+"px"},
                     10);
             });
         });
         $(document).mouseup(function () {
            $(".theme-popover").css("cursor","default");
            $(this).unbind("mousemove");
         });
     });
 </script>
 </body>
</html>
