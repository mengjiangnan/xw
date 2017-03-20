<?php
  include_once dirname (__FILE__).'/Conf/conn.php'; //引入数据库连接文件
  include_once 'xw_index_title_class.php'; //引入首页标题类文件
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
   </head>
</html>
