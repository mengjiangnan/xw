<?php
  include_once 'conn.php'; //引入数据库连接文件
  include_once 'xw_index_title_class.php';
  $my_class = new index_title();
  $my_class->setTitle('test');
?>
<!Document>
<html>
   <head>
       <title>
           <?php
           echo $my_class->getTitle();
           ?>
       </title>
   </head>
</html>
