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
   </head>
 <body>
   <div class="top_nav" id="nav_outside">
       <div class="top_nav_inner" id="nav_inner">
           <ul class="top_nav_ul" id="nav_ul">
               <li class="top_logo" id="logo">
               </li>
               <li class="top_li_second" id="li_second">
                   <a class="top_li_second" id="li_second_a" href="#">
                       我的最爱
                   </a>
               </li>
               <li class="top_li_three" id="li_three">
                   <a class="top_li_three" id="li_three_a" href="#">
                       我关注的
                   </a>
               </li>
               <li class="top_li_four" id="li_four">
                   <a class="top_li_four" id="li_four_a" href="#">
                       收藏夹
                   </a>
               </li>
               <li class="top_li_five" id="li_five">
                   <a class="top_li_five" id="li_five_a" href="#">
                       手机版
                   </a>
               </li>
               <li class="top_li_six" id="li_six">
                   <a class="top_li_six" id="li_six_a" href="#">
                       Login
                   </a>
               </li>
           </ul>
       </div>
   </div>
 </body>
</html>
