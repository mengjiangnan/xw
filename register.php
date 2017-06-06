<!DOCTYPE html>
<html>
   <head>
       <title>
           register
       </title>
       <!--字符编码utf-8-->
       <meta charset="UTF-8">
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
           <form id="register_form" name="register_form_name" method="post">
               <p class="pass_general_error_wrapper">
                   <span class="pass_general_error_content">
                   </span>
               </p>
               <p id="hidden_fields">
                   <input name="u" type="hidden">
               </p>
               <p class="register_form_item form_item_user_name">
                   <label class="form_user_label form_user_name_label">
                       用户名
                   </label>
                   <!--用户名input框-->
                   <input name="form_user_name_inputname" id="form_user_name_input_id" class="form_user_input form_user_name_input" type="text" placeholder="请设置用户名">
                   <!--显示清除图标-->
                   <span class="form_user_name_clear_btn_span"></span>
                   <!--右侧普通提示信息-->
                   <span class="form_normal_notice_span form_user_name_normal_notice_span">中英文均可，最长7个汉字或14个英文</span>
                   <!--右侧错误提示信息-->
                   <span class="form_user_name_error_notice_span">用户名不能超过7个汉字或14个字符</span>
                   <!--右侧用户名重复提示信息-->
                   <span class="form_user_name_repeat_notice_span">此用户名太受欢迎,请更换一个</span>
                   <!--右侧用户名为纯数字时的提示信息-->
                   <span class="form_user_name_isnumber_notice_span">用户名仅支持中英文、数字和下划线,且不能为纯数字</span>
                   <!--右侧用户名可用提示信息-->
                   <span class="form_user_name_success_notice_span"></span>
               </p>
               <div class="pass_suggest_name_div">
                   <p class="pass_suggest_item">
                       <label name="suggestName" class="suggest_test">
                           <input name="suggestName" id="pass_suggest_item_radio_one" class="pass_suggest_item_radio" type="radio" value="">
                           <span class="my_user_name_one_span"></span>
                       </label>
                   </p>
                   <p class="pass_suggest_item">
                       <label name="suggestName">
                           <input name="suggestName" id="pass_suggest_item_radio_two" class="pass_suggest_item_radio" type="radio" value="">
                           <span class="my_user_name_two_span"></span>
                       </label>
                   </p>
                   <p class="pass_suggest_item">
                       <label name="suggestName">
                           <input name="suggestName" id="pass_suggest_item_radio_three" class="pass_suggest_item_radio" type="radio" value="">
                           <span class="my_user_name_three_span"></span>
                       </label>
                   </p>
               </div>
               <p class="register_form_item form_item_user_phone">
                   <label class="form_user_label form_item_user_phone_label">
                       手机号
                   </label>
                   <!--手机号input框-->
                   <input name="form_user_phone_inputphone" id="form_user_phone_input_id" class="form_user_input form_user_phone_input" type="text" maxlength="11" placeholder="可用于登录和找回密码">
                   <!--显示清除图标-->
                   <span class="form_user_phone_clear_btn_span"></span>
                   <!--右侧普通提示信息-->
                   <span class="form_normal_notice_span form_user_phone_normal_notice_span">请输入中国大陆手机号</span>
                   <!--右侧错误提示信息-->
                   <span class="form_user_phone_error_notice_span">手机号码格式不正确</span>
               </p>
           </form>
       </div>
   </div>
   <script>
   /*焦点在input框内时边框颜色变为蓝色，当焦点离开input框时，边框颜色还原为灰色*/
   var text = $(".form_user_name_input");
   var inner_input = $(".form_user_name_clear_btn_span");

   /*手机号正则验证*/
   function checkMobile(){
       var sMobile =  document.getElementById('form_user_phone_input_id').value;
       if(!(/^1[34578]\d{9}$/.test(sMobile))){
           return false;
       }else {
           return true;
       }
   }

   /*
    * 中英文统计(一个中文算两个字符)
    */
   function chEnWordCount(str){
       var count = str.replace(/[^\x00-\xff]/g,"**").length;
       return count;
   }
   /*
   * 随机字符串生成（数字+英文）
   */
   function randomString(len) {
       len = len || 32;
       var $chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678';    /****默认去掉了容易混淆的字符oOLl,9gq,Vv,Uu,I1****/
       var maxPos = $chars.length;
       var pwd = '';
       for (i = 0; i < len; i++) {
           pwd += $chars.charAt(Math.floor(Math.random() * maxPos));
       }
       return pwd;
   }
   /*
   * 随机星座中文字符
   */
   function radomChinaString(len){
       len = len || 2;
       var ChinaArr = new Array("白羊","金牛","双子","巨蟹","天平","狮子","射手","水瓶","摩羯","天蝎","处女","双鱼");
       var maxPos = ChinaArr.length;
       var index = Math.floor((Math.random()*maxPos));
       return ChinaArr[index];
   }

   text.focus(function () {
       text.css("border-color","#3079ED");
       $(".form_user_name_normal_notice_span").css("display","block");
       $(".form_user_name_error_notice_span").css("display","none");
       $(".form_user_name_repeat_notice_span").css("display","none");
       $(".form_user_name_success_notice_span").css("display","none");
       $(".form_user_name_isnumber_notice_span").css("display","none");
   }).blur(function (e) {
       text.css("border-color","#ddd");
       $(".form_user_name_normal_notice_span").css("display","none");
       if(chEnWordCount(text.val())>=15){
           $(".form_user_name_normal_notice_span").css("display","none");
           $(".form_user_name_error_notice_span").css("display","block");
       }else {
           $(".form_user_name_error_notice_span").css("display","none");
       }
       /*内容不能为纯数字且内容长度小于14*/
       if(isNaN(text.val())&&(chEnWordCount(text.val())<15)){
           /*input框提交AJAX请求*/
           $.post(
               "./Ajax/xw_register_ajax_username_verify.php",
               $('#form_user_name_input_id').serialize()+'&active='+$(e.target).attr('id'),
               function (data) {
                   if(data.state =='success'){
                       $(".form_user_name_repeat_notice_span").css("display","block");
                       if((chEnWordCount(text.val())>=3)&&(chEnWordCount(text.val())<=12)){
                           $('.pass_suggest_name_div').css("display","block");
                           var my_user_name_one = data.user_name.toString()+randomString(3);
                           $(".my_user_name_one_span").text(my_user_name_one);
                           $("#pass_suggest_item_radio_one").val(my_user_name_one);
                           var my_user_name_two = randomString(3) + data.user_name.toString();
                           $(".my_user_name_two_span").text(my_user_name_two);
                           $("#pass_suggest_item_radio_two").val(my_user_name_two);
                           var my_user_name_three = radomChinaString(2) + data.user_name.toString();
                           $(".my_user_name_three_span").text(my_user_name_three);
                           $("#pass_suggest_item_radio_three").val(my_user_name_three);
                       }
                   }else if(data.state=='error'){
                       $(".form_user_name_repeat_notice_span").css("display","none");
                       $(".form_user_name_success_notice_span").css("display","block");
                   }else{
                       $(".form_user_name_repeat_notice_span").css("display","none");
                   }
               },"json"
           );
       }else if(text.val()==''){
           //什么也不做
       }else if(isNaN(text.val())&&(chEnWordCount(text.val())>=15)){
           $(".form_user_name_isnumber_notice_span").css("display","none");
       }else if(!isNaN(text.val())&&(chEnWordCount(text.val())>=15)) {
           $(".form_user_name_isnumber_notice_span").css("display","none");
       } else {
           $(".form_user_name_isnumber_notice_span").css("display","block");
       }
       return e.preventDefault();
   });
   /*当光标移入手机号input框时，input框变成蓝色。光标移出后input框变成灰色*/
   $(".form_user_phone_input").focus(function () {
       $(".form_user_phone_input").css("border-color","#3079ED");
       $(".form_user_phone_normal_notice_span").css("display","block");
       $(".form_user_phone_error_notice_span").css("display","none");
   }).blur(function () {
       $(".form_user_phone_input").css("border-color","#ddd");
       $(".form_user_phone_normal_notice_span").css("display","none");
       if(chEnWordCount($(".form_user_phone_input").val())>0){
           /*检测手机号是否合法*/
          if(checkMobile()===false){
              $(".form_user_phone_error_notice_span").css("display","block");
              $(".form_user_phone_normal_notice_span").css("display","none");
          }
       }

   });

   /*当用户名input框内有值的时候，清除按钮显示*/
   text.bind("input propertychange",function () {
       if(text.val().length!==0){
           inner_input.show();
       }
   });

   /*当手机号input框内有值的时候，清除按钮显示*/
   $(".form_user_phone_input").bind("input propertychange",function () {
       if($(".form_user_phone_input").val().length!==0){
           $(".form_user_phone_clear_btn_span").show();
       }
   });

   /*手机名input框内清除按钮点击后，手机名input框内容为空，提示隐藏，清除按钮隐藏*/
   $(".form_user_phone_clear_btn_span").click(function () {
       $(".form_user_phone_input").val('');
       $(".form_user_phone_clear_btn_span").hide();
       $(".form_user_phone_error_notice_span").css("display","none");
   });

   /*用户名input框内清除按钮点击后，用户名input框内容为空，提示隐藏，清除按钮隐藏*/
   inner_input.click(function () {
       text.val('');
       inner_input.hide();
       $(".form_user_name_error_notice_span").css("display","none");
       $(".form_user_name_normal_notice_span").css("display","none");
       $(".form_user_name_repeat_notice_span").css("display","none");
       $(".form_user_name_success_notice_span").css("display","none");
       $(".form_user_name_isnumber_notice_span").css("display","none");
   });
   /*点击radio选项后，input框中的值成为当前值，而且radio隐藏*/
   $("#pass_suggest_item_radio_one").click(function () {
       var radio_one_val=$('#pass_suggest_item_radio_one:radio:checked').val();
       text.focus().val(radio_one_val);
       $('.pass_suggest_name_div').css("display","none");
   });
   $("#pass_suggest_item_radio_two").click(function () {
       var radio_two_val=$('#pass_suggest_item_radio_two:radio:checked').val();
       text.focus().val(radio_two_val);
       $('.pass_suggest_name_div').css("display","none");
   });
   $("#pass_suggest_item_radio_three").click(function () {
       var radio_three_val=$('#pass_suggest_item_radio_three:radio:checked').val();
       text.focus().val(radio_three_val);
       $('.pass_suggest_name_div').css("display","none");
   });
   </script>
   </body>
</html>