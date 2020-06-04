<!DOCTYPE>
<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="用户登录">
<meta name="description" content="用户登录">
<title>用户注册</title>
<link rel="stylesheet" type="text/css" href="../css/general.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/general.js"></script>
<script src="../js/jquery.validate.min.js"></script>
</head>
<body>
<!-- 头部开始 -->
<div class="header">
  <div class="w900 mt30 cut">
    <div class="logo"><a href=""><img src="../images/logo2.jpg" height="75px" width="375px"></a></div>
  </div>
</div>
<!-- 头部结束 -->
<!-- 主体开始 -->
<div class="container w900 mt20">
  <div class="wbox cut">
    <div class="login-banner fl cut"></div>
    <form method="post" action="doregist.php" id="regform" >
      <input type="password" value="" class="hide">
      <div class="login ml530">
        <h2 class="c666">用户注册</h2>
        <dl class="username mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="username" id="username" type="text" placeholder="请输入用户名" required></dd>

        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="password" id="password" type="password" placeholder="请输入密码" required></dd>
        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="tel" id="tel" type="text" placeholder="手机号" required></dd>
        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="sex" id="sex" type="text" placeholder="性别" required></dd>
        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="email" id="email"  type="text" placeholder="邮箱" required></dd>
        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="address" id="address" type="text" placeholder="地址" required></dd>
        </dl>
        <!--  -->
        <div class="ck module mt20 cut">
          <div class="fl"></div>
          <div class="fr"></div>
        </div>
        <input class="form-submit aln-c radius4 mt20"  type="submit" onclick="check()" value="注&nbsp;册">


      </div>
    </form>
  </div>
</div>
<!-- 主体结束 -->
<div class="cl"></div>
<!-- 页脚开始 -->
<div class="footer mt20">
  <div class="links radius4 mt20">

      </div>

</div><!-- 页脚结束 -->

<script type="text/javascript">

    function check() {
        var username=document.getElementById("username");
        var password=document.getElementById("password");
        var sex=document.getElementById("sex");
        var tel=document.getElementById("tel");
        var email=document.getElementById("email");
        var address=document.getElementById("address");

        if(username.value==""){
            alert("用户名不能为空");
            return false;
        }else if(username.value.lenth<2||username.value.lenth>8){
            alert("用户名长度不符合要求\n用户名长度为2-8个字符");
            return false;
        }else if(password.value.lenth<6||password.value.lenth>12){
            alert("密码长度不符合要求\n密码长度为6-12个字符");
            return false;
        }
        else if(email.value.indexOf(".")<0||email.value.indexOf("@")<0){
            alert("邮箱名错误")
            return false;
        }else if(sex.value==""){
            alert("性别不能为空");
            return false;
        }else if(!(/^1(3|4|5|6|7|8|9)\d{9}$/.test(tel.value))){
            alert("手机号格式不正确");
            return false;
        }else if(address.value==""){
            alert("地址不能为空");
            return false;
        }
    }

/*$().ready(function() {
// 在键盘按下并释放及提交后验证提交表单
  $("#regform").validate();

}
*/
</script>

</body></html>
