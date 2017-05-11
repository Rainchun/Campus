<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>AbsoluteAdmin - A Responsive Boostrap 3 Admin Dashboard</title>
  <meta name="keywords" content="Bootstrap 3 Admin Dashboard Template Theme" />
  <meta name="description" content="AdminDesigns - Bootstrap 3 Admin Dashboard Theme">
  <meta name="author" content="AdminDesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Font CSS (Via CDN) -->
  <!-- <link rel='stylesheet' type='text/css' href='http://fonts.useso.com/css?family=Open+Sans:300,400,600,700'> -->

  <!-- Plugin CSS --> 
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/vendor/plugins/magnific/magnific-popup.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/skin/default_skin/css/theme.css">


  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/admin-tools/admin-forms/css/admin-forms.css">

  
  <!-- Glyphicons Pro CSS(font) -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/fonts/glyphicons-pro/glyphicons-pro.css">

  <!-- Icomoon CSS(font) -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/fonts/icomoon/icomoon.css">

  <!-- Iconsweets CSS(font) -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/fonts/iconsweets/iconsweets.css">

  <!-- Octicons CSS(font) -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/fonts/octicons/octicons.css">

  <!-- Stateface CSS(font) -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/fonts/stateface/stateface.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/Campus/Public/Admin/assets/img/favicon.ico">

 <style type="text/css">

/* 分页样式*/
.prev{
     border: 1px solid #ddd;
      padding: 10px 20px;
      border-top-left-radius: 6px;
      border-bottom-left-radius: 6px;

}

.next{
     border: 1px solid #ddd;
      padding: 10px 20px;
      border-top-right-radius: 6px;
      border-bottom-right-radius: 6px;

}

.num{
    border: 1px solid #ddd;
    padding: 10px 20px;
    margin-left: 0px
}

.current{
    border: 1px solid #ddd;
    padding: 10px 20px;
    margin-right: 10px;
    margin-left: 10px;
  
}

.paging a{
     font-size: 18px;

}

.paging{
    margin-left:250px; 
}

 </style>
</head>

<body class="external-page sb-l-c sb-r-c">

  <!-- Start: Main -->
  <div id="main" class="animated fadeIn">

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- begin canvas animation bg -->
      <div id="canvas-wrapper">
        <canvas id="demo-canvas"></canvas>
      </div>

      <!-- Begin: Content -->
      <section id="content">

        <div class="admin-form theme-info mw600" style="margin-top: 10%;" >
          <div class="row mb15 table-layout">

            <div class="col-xs-6 pln">
              <a href="#" title="Return to Dashboard">
                <img src="/Campus/Public/Admin/assets/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
              </a>
            </div>

            <div class="col-xs-6 text-right va-b pr5">
              <div class="login-links">
                <a href="#" class="" title="False Credentials"></a>
              </div>

            </div>

          </div>
          <div class="panel panel-info heading-border br-n">

            <!-- end .form-header section -->
            
              <div class="panel-body bg-light pn">

                <div class="row table-layout">
                  <div class="col-xs-3 p20 pv15 va-m br-r bg-light">
                    <img class="br-a bw4 br-grey img-responsive center-block" src="/Campus/Public/Admin/assets/img/avatars/3.jpg" title="AdminDesigns Logo">
                  </div>
                  <div class="col-xs-9 p20 pv15 va-m bg-light">

                    <!-- <h3 class="mb5"> Michael Rowls
                      <small> - logged out for
                        <b> 5 hours </b>
                    </h3>
                    <p class="text-muted">michaelrowls@company.com</p> -->
                    <form method="post" action="<?php echo U('dologin');?>" enctype="multipart/form-data">
                    <div class="section mt25">
                       
                     <label for="username" class="field prepend-icon">
                        <input type="text" name="adminname" id="adminname" class="gui-input" placeholder="输入管理员姓名">
                        <label for="adminname" class="field-icon">
                        <i class="fa fa-user"></i>
                        </label>
                       </label>
                    </div>

                    <div class="section mt25">
                      <label for="password" class="field prepend-icon">
                        <input type="password" name="password" id="password" class="gui-input" placeholder="输入密码">
                        <label for="password" class="field-icon">
                          <i class="fa fa-lock"></i>
                        </label>
                      </label>
                    </div>

                    <div class="section mt25">

                      <input class="gui-input" placeholder="验证码" type="text"  name="verifycode" required style="width: 200px">
                      
                      <img src="<?php echo U('verify');?>" title="点击刷新验证码" style="height: 50px;" onclick="fleshVerify()" id="verifyimg">
                      <script type="text/javascript">
                        function fleshVerify(){
                          document.getElementById("verifyimg").src="<?php echo U('verify');?>";

                        }
                      </script>

                    </div>
                    <!-- end section -->
                   

                  </div>
                </div>
              </div>

              </div>
              <!-- end .form-body section -->
               <!-- <input class="button btn-info pull-right"  type="submit" value="登 录"> -->
               <button type="submit" class="button btn-info pull-right" >登录</button>                  
            </form>
          
          

          
        </div>

      </section>
      <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="/Campus/Public/Admin/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="/Campus/Public/Admin/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- CanvasBG Plugin(creates mousehover effect) -->
  <script src="/Campus/Public/Admin/vendor/plugins/canvasbg/canvasbg.js"></script>

  <!-- Theme Javascript -->
 <!--  <script src="/Campus/Public/Admin/assets/js/utility/utility.js"></script>
  <script src="/Campus/Public/Admin/assets/js/demo/demo.js"></script>
  <script src="/Campus/Public/Admin/assets/js/main.js"></script> -->

  <!-- Page Javascript -->
  <script type="text/javascript">
  jQuery(document).ready(function() {
    "use strict";

    // Init Theme Core      
    Core.init();

    // Init Demo JS
    Demo.init();

    // Init CanvasBG and pass target starting location
    CanvasBG.init({
      Loc: {
        x: window.innerWidth / 2.1,
        y: window.innerHeight / 2.3
      },
    });


  });
  </script>

  <!-- END: PAGE SCRIPTS -->

</body>

</html>