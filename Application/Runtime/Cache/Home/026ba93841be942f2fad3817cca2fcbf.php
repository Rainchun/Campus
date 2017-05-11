<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title></title>
		<script src="/Campus/Public/Home/js/jquery-2.2.4.min.js"></script>





		<script>
			$(document).ready(function() {
				
				$(".form").slideDown(500)
				
				$("#landing").addClass("border-btn");

				$("#registered").click(function() {
					$("#landing").removeClass("border-btn");
					$("#landing-content").hide(500);
					$(this).addClass("border-btn");
					$("#registered-content").show(500);
					
				})

				$("#landing").click(function() {
					$("#registered").removeClass("border-btn");
					$(this).addClass("border-btn");
					
					$("#landing-content").show(500);
					$("#registered-content").hide(500);
				})
			});

			function check(){
            var password = document.getElementById("password").value;
            var repsword = document.getElementById("newpassword").value;
            if(password == ''||repsword==''){
            alert('密码不能为空');
                return false;
            }
            if(password != repsword) {
            alert("两次密码不同，请重新输入");
              return false;
           }
           return true;
           }
		</script>
		<style>
			* {
				margin: 0;
				padding: 0;
				font-family: "微软雅黑";
			}
			
			body {
				background: #F7F7F7;
			}
			
			.form {
				position: absolute;
				top: 50%;
				left: 50%;
				margin-left: -185px;
				margin-top: -210px;
				height: 450px;
				width: 340px;
				font-size: 18px;
				-webkit-box-shadow: 0px 0px 10px #A6A6A6;
				background: #fff;
			}
			
			.border-btn {
				border-bottom: 1px solid #ccc;
			}
			
			#landing,
			#registered {
				float: left;
				text-align: center;
				width: 170px;
				padding: 15px 0;
				color: #545454;
			}
			
			#landing-content {
				clear: both;
			}
			
			.inp {
				height: 30px;
				margin: 0 auto;
				margin-bottom: 30px;
				width: 200px;
			}
			
			.inp>input {
				text-align: center;
				height: 30px;
				width: 200px;
				margin: 0 auto;
				transition: all 0.3s ease-in-out;
			}
			
			.login {
				border: 1px solid #A6A6A6;
				color: #a6a6a6;
				height: 30px;
				width: 202px;
				text-align: center;
				font-size: 13.333333px;
				margin-left: 71px;
				line-height: 30px;
				
				transition: all 0.3s ease-in-out;
			}
			
			.login:hover {
				background: #A6A6A6;
				color: #fff;
			}
			
			#bottom {
				margin-top: 30px;
				font-size: 13.333333px;
				color: #a6a6a6;
			}
			
			#registeredtxt {
				float: left;
				margin-left: 80px;
			}
			
			#forgotpassword {
				float: right;
				margin-right: 80px;
			}
			
			#photo {
				border-radius: 80px;
				border: 1px solid #ccc;
				height: 80px;
				width: 80px;
				margin: 0 auto;
				overflow: hidden;
				clear: both;
				margin-top: 30px;
				margin-bottom: 30px;
			}
			
			#photo>img:hover {
				-webkit-transform: rotateZ(360deg);
				-moz-transform: rotateZ(360deg);
				-o-transform: rotateZ(360deg);
				-ms-transform: rotateZ(360deg);
				transform: rotateZ(360deg);
			}
			
			#photo>img {
				height: 80px;
				width: 80px;
				-webkit-background-size: 220px 220px;
				border-radius: 60px;
				-webkit-transition: -webkit-transform 1s linear;
				-moz-transition: -moz-transform 1s linear;
				-o-transition: -o-transform 1s linear;
				-ms-transition: -ms-transform 1s linear;
			}
			
			
			#registered-content {
				margin-top: 40px;
				display: none;
			}
			
			.fix {
				clear: both;
			}
			.form{
				display: none;
			}
		</style>

	<script>
       //  function check(){
       //      var password = document.getElementById("password").value;
       //      var repsword = document.getElementById("newpassword").value;
       //  if(password == ''||repsword==''){
       //  alert('密码不能为空');
       //      return false;
       //  }
       //  if(password != repsword) {
       //  alert("两次密码不同，请重新输入");
       //      return false;
       //  }
       // return true;
       //  }


       var xmlHttp;

       function createXHR(){

          try{    // Firefox, Opera 8.0+, Safari
               xmlHttp=new XMLHttpRequest();    
             }
          catch(e){   // Internet Explorer
              try{
                     xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e){
                     
                       try{
                           xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
                         }
                      catch (e){
                           alert("您的浏览器不支持AJAX！");
                         return false;
                        }     

                    }    
          } 
 }


    function checkTele(){

            createXHR();

             xmlHttp.onreadystatechange=function() {
             if (xmlHttp.readyState==4 && xmlHttp.status==200)
             {    
                 document.getElementById("tip").innerHTML=xmlHttp.responseText;
             }
           }

             var tele=document.getElementById("telephone").value;

             var tl=tele.length;

             xmlHttp.open("get","checkTele?t="+tele+"&l="+tl);
             xmlHttp.send();

}

    function checkAlias(){
      createXHR();

       xmlHttp.onreadystatechange=function() {
             if (xmlHttp.readyState==4 && xmlHttp.status==200)
             {    
               // document.getElementById("tips").innerHTML="";
                 document.getElementById("tipAlia").innerHTML=xmlHttp.responseText;
             }
           }

             var uname=document.getElementById("uname").value;

             xmlHttp.open("get","checkAlias?alias="+uname);
             xmlHttp.send();

    }

     function checkAlias2(){

      createXHR();

     

       xmlHttp.onreadystatechange=function() {
             if (xmlHttp.readyState==4 && xmlHttp.status==200)
             {    
              document.getElementById("tips").innerHTML="";
              var info=eval(xmlHttp.responseText);
              for(i=0;i<info.length;i++){
              document.getElementById("tips").innerHTML+=info[i].aliasname+"&nbsp;";
            }

             }
           }

             var ass=document.getElementById("aliasname").value;

             xmlHttp.open("get","checkA?tt="+ass);
             xmlHttp.send();

    }

    function checkAlias3(){
       document.getElementById("tips").innerHTML="";
       var ass=document.getElementById("aliasname").value;

       $.getJSON("checkA", {t:ass}, function(info){

        for(i=0;i<info.length;i++){
              document.getElementById("tips").innerHTML+=info[i].aliasname+"&nbsp;";
            }
      

        });


    }

    function check(){
      createXHR();

       xmlHttp.onreadystatechange=function() {
             if (xmlHttp.readyState==4 && xmlHttp.status==200)
             {    
                 document.getElementById("tipPwd").innerHTML=xmlHttp.responseText;
             }
           }

             var password=document.getElementById("password").value;
             var newpassword=document.getElementById("newpassword").value;

             xmlHttp.open("get","check?pwd1="+password+"&pwd2="+newpassword);
             xmlHttp.send();

    }

      function checkYZM(){
      createXHR();

       xmlHttp.onreadystatechange=function() {
             if (xmlHttp.readyState==4 && xmlHttp.status==200)
             {    
                 document.getElementById("tipYZM").innerHTML=xmlHttp.responseText;
             }
           }

             var verifycode=document.getElementById("verifycode").value;

             xmlHttp.open("get","checkYZM?verifycode="+verifycode);
             xmlHttp.send();

    }

     function checkYZMs(){
      createXHR();

       xmlHttp.onreadystatechange=function() {
             if (xmlHttp.readyState==4 && xmlHttp.status==200)
             {    
                 document.getElementById("tipYZMs").innerHTML=xmlHttp.responseText;
             }
           }

             var verifycode=document.getElementById("verifycodes").value;

             xmlHttp.open("get","checkYZM?verifycode="+verifycode);
             xmlHttp.send();

    }





    </script>
	</head>

	<body>

		<div class="form" style="margin-top: -280px;height: 520px">
			<div id="landing">登陆</div>
			<div id="registered">注册</div>
			<div class="fix"></div>
			<div id="landing-content">
			<form method="post" action="<?php echo U('Home/User/dologin');?>" >
				<div id="photo"><img src="/Campus/Public/Home/images/g3.jpg"></div>
				<div class="inp"><input type="text" name="telephone" placeholder="手机号" /></div>
				<div class="inp"><input type="password" name="password" placeholder="密码" /></div>
				<div class="inp"><input type="text" type="email" id="verifycodes" name="verifycode" required onblur="checkYZMs()" placeholder="输入验证码" />
				<span id="tipYZMs"></span></div>
				<img src="<?php echo U('verify');?>" title="点击刷新验证码" style="cursor: pointer;border: 0px;margin-left: 85px;height: 45px" onclick="fleshVerifys()" id="verifyimgs">
                      <script type="text/javascript">
                        function fleshVerifys(){
                          document.getElementById("verifyimgs").src="<?php echo U(verify);?>";
                        }
                      </script>
				<div><input class="login" type="submit" value="登录"></input></div>
				</form>
				<div id="bottom"><span id="registeredtxt"></span><span id="forgotpassword">忘记密码</span></div>
			</div>
			<form method="post" action="<?php echo U('Home/User/register');?>" onsubmit="return check();">
			<div id="registered-content" >
				<div class="inp"><input type="text" name="telephone" placeholder="请输入电话号码" pattern="[0-9]{11}" required id="telephone" onblur="checkTele()" />
				<span id="tip" ></span>
				</div>
				<div class="inp"><input class="form-control" placeholder="请输入用户名" type="text" id="uname" name="uname"  required onblur="checkAlias()">
				<span id="tipAlia"></span></div>
				<div class="inp"><input type="password" name="password" id="password" placeholder="请输入密码" required /></div>
				<div class="inp"><input type="password" name="newpassword" id="newpassword" placeholder="请再次输入密码" required  onblur="check()"/>
				<span id="tipPwd"></span></div>
				<div class="inp"><input type="text" type="email" id="verifycode" name="verifycode" required onblur="checkYZM()" placeholder="输入验证码" />
				<span id="tipYZM"></span></div>
				<img src="<?php echo U('verify');?>" title="点击刷新验证码" style="cursor: pointer;border: 0px;margin-left: 85px;height: 45px" onclick="fleshVerify()" id="verifyimg">
                      <script type="text/javascript">
                        function fleshVerify(){
                          document.getElementById("verifyimg").src="<?php echo U(verify);?>";
                        }
                      </script>
				<input class="login" type="submit" value="立即注册"> </input>
			</form>
			</div>
		</div>
	</body>

</html>