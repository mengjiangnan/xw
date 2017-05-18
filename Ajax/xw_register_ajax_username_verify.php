<?php
include_once ("../Conf/conn.php"); //引入数据库连接文件
if (!empty($_POST['form_user_name_inputname'])){
    extract($_POST);
    $sql = "SELECT COUNT(id) FROM xw_user_auth WHERE user_name = '$form_user_name_inputname'";
    $stmt = $dbh->prepare($sql);
    $stmt ->execute();
    //取得行数
    $result = $stmt ->fetchColumn();
    if ($result==1){
        $success_arr = array ('state'=>'success','user_name'=>$form_user_name_inputname);
        die(json_encode($success_arr));
    } else if($result==0){
        $fail_arr = array ('state'=>'error');
        die(json_encode($fail_arr));
    }
}else{
    die("<null />");
}
?>