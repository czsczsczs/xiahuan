<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <title>
            Login
        </title>
        <meta content="width=device-width, initial-scale=1" name="viewport">
            <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
            <meta content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" name="keywords"/>
            <script type="application/x-javascript">
                addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
            </script>
            <!-- Bootstrap Core CSS -->
            <link href="/xiahuan/Public/Static/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
            <!-- Custom CSS -->
            <link href="/xiahuan/Public/Static/Admin/css/style.css" rel="stylesheet" type="text/css"/>
            <link href="/xiahuan/Public/Static/Admin/css/font-awesome.css" rel="stylesheet">
                <!-- jQuery -->
                <script src="/xiahuan/Public/Static/Admin/js/jquery.min.js">
                </script>
                <!-- Bootstrap Core JavaScript -->
                <script src="/xiahuan/Public/Static/Admin/js/bootstrap.min.js">
                </script>
            </link>
        </meta>
    </head>
    <style>
        .login-error{
            color: red;
        }
    </style>
    <body id="login">
        <div class="login-logo" style="margin-top:100px;">
            管理登錄
        </div>
        
        <div class="app-cam">
            <form method="post" action="" data-ajax="false" id="QasystemForm" return="false">
                <input class="text" name="name" id="name" placeholder="User Name" type="text" value="">
                <span class="login-error" id="name_err"></span>
                <input id="password" placeholder="password" type="password" value="">
                <div class="login-error" id="password_err"></div>
                <input id="captcha" placeholder="驗證碼" class="captcha" type="text" name="captcha" value="" style="width:50%">
                <img id="verify_img" alt="点击更换" title="点击更换" src="<?php echo U('Login/verify',array());?>" class="m">
                <span class="login-error" id="captcha_err"></span>
                <div class="submit">
                    <input id="submit_qasystem" type="button" value="Login"/>
                </div>
               <!--  <ul class="new">
                    <li class="new_left"><p><a href="<?php echo U('Login/send_mail');?>">Forgot Password ?</a></p></li>
                    <div class="clearfix"></div>
                </ul>   -->  
                
            </form>
        </div>
        <div class="copy_layout login">
            <div class="divPowerBy">
                    Copyright © 2018 All rights reserved 
                    <a href="//www.macautech.net" target="_blank" title="普及科技">
                        普及科技
                    </a>
            </div>
        </div>
<script type="text/javascript">
  $(document).ready(function(e) {
    var form = $("#QasystemForm");
    $("#submit_qasystem",form).click(function(){
      var name = $("#name").val();
      var password = $("#password").val();
      var captcha = $("#captcha").val();
      var submitData = 
          {
            name : name,
            password : password,
            captcha : captcha,
            
          };
          $.ajax({    
            type:"post",    
            url:"<?php echo U('Login/login');?>",    
            data:submitData,//这里data传递过去的是序列化以后的字符串    
            success:function(data){ 
                if(data.status == 'error_name'){
                    $("#name_err").html(data.message);
                   
                }
                if(data.status == 'error_password'){
                    $("#password_err").html(data.message);
                   
                }
                if(data.status == 'error_captcha'){
                    $("#captcha_err").html(data.message);
                   
                }
                if(data.status == false){
                    $("#captcha_err").html(data.message);
                   
                }
                if(data.status == 'success'){
                    window.location.href = "<?php echo U('Login/logining');?>";
                    return false;
                }
            }    
        });
        var verifyURL = "verify";
        var time = new Date().getTime();
        $("#verify_img").attr({
           "src" : verifyURL + "/" + time
        });
      });   
  });
    
$("#verify_img").click(function() {
   var verifyURL = "verify";
   var time = new Date().getTime();
   $("#verify_img").attr({
      "src" : verifyURL + "/" + time
   });
});


$('#captcha').focus(function(){
    $("#captcha_err").html('');
});
$('#password').focus(function(){
    $("#password_err").html('');
});
$('#name').focus(function(){
    $("#name_err").html('');
});
</script>
    </body>
</html>