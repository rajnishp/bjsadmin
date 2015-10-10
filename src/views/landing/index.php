<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueTeam | Admin Login</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ] -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?= $this-> baseUrl ?>static/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="<?= $this-> baseUrl ?>static/css/nifty.min.css" rel="stylesheet">

    
    <!--Font Awesome [ OPTIONAL ]-->
    <link href="<?= $this-> baseUrl ?>static/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href="<?= $this-> baseUrl ?>static/css/demo/nifty-demo.min.css" rel="stylesheet">




    <!--SCRIPT-->
    <!--=================================================-->

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="<?= $this-> baseUrl ?>static/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="<?= $this-> baseUrl ?>static/plugins/pace/pace.min.js"></script>


    
    <!--

    REQUIRED
    You must include this in your project.

    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.

    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.

    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.

    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    -->
        

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="cls-container">
        
        <!-- BACKGROUND IMAGE -->
        <!--===================================================-->
        <div id="bg-overlay" class="bg-img img-balloon"></div>
        
        
        <!-- HEADER -->
        <!--===================================================-->
        <div class="cls-header cls-header-lg">
            <div class="cls-brand">
                <a class="box-inline" href="index.html">
                    <!-- <img alt="Nifty Admin" src="img/logo.png" class="brand-icon"> -->
                    <span class="brand-title">BlueTeam <span class="text-thin">Admin</span></span>
                </a>
            </div>
        </div>
        <!--===================================================-->
        
        
        <!-- LOGIN FORM -->
        <!--===================================================-->
        <div class="cls-content">
            <div class="cls-content-sm panel">
                <div class="panel-body">
                    <p class="pad-btm">Sign In to your account</p>
                    <form  onsubmit="return (validateLog());" >
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input type="text" class="form-control"  id="username" name="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <span id = "password_span"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-8 text-left checkbox">
                                <label class="form-checkbox form-icon">
                                <input type="checkbox"> Remember me
                                </label>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group text-right">
                                <button class="btn btn-success text-uppercase" type="submit">Sign In</button>
                                </div>
                            </div>
                        </div>
                        <div class="mar-btm"><em>- or -</em></div>
                        <button class="btn btn-primary btn-lg btn-block" type="button">
                            <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                        </button>
                    </form>
                </div>
            </div>
            <div class="pad-ver">
                <a href="pages-password-reminder.html">
                <a href="#forget-password" data-target="#forget-password" data-toggle="modal" class="btn-link mar-rgt"> Forgot password ?</a>
                <a href="#" class="btn-link mar-lft">Create a new account</a>
            </div>
        </div>
        <!--===================================================-->
        
        
        <!-- DEMO PURPOSE ONLY -->
        <!--===================================================-->
        <div class="demo-bg">
            <div id="demo-bg-list">
                <div class="demo-loading"><i class="fa fa-refresh"></i></div>
                <img class="demo-chg-bg bg-trans" src="img/bg-img/thumbs/bg-trns.jpg" alt="Background Image">
                <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-1.jpg" alt="Background Image">
                <img class="demo-chg-bg active" src="img/bg-img/thumbs/bg-img-2.jpg" alt="Background Image">
                <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-3.jpg" alt="Background Image">
                <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-4.jpg" alt="Background Image">
                <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-5.jpg" alt="Background Image">
                <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-6.jpg" alt="Background Image">
                <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-7.jpg" alt="Background Image">
            </div>
        </div>
        <!--===================================================-->
        
        
        
    </div>

     <!--Forget Password Modal-->
  <!--===================================================-->
  <div class="modal fade modal-styled" id="forget-password">
    <div class="modal-dialog">
      <div class="modal-content">

        <!--Modal header-->
        <div class="modal-header" >
          <button data-dismiss="modal" class="close" type="button">
          <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Password Reset</h4>
        </div>

        <!--Modal body-->
        <div class="modal-body">

          <div class="account-wrapper">

            <h5>We'll email you instructions on how to reset your password.</h5>
            <div id = "forget_password_fiv">
              <form class="form account-form" onsubmit="return (validateForgetPassword());">

                <div class="form-group">
                  <label for="forget_email" class="placeholder-hidden">Your Email</label>
                  <input type="email" class="form-control" id="forget_email" placeholder="Your Email"  style= "border-color: blue;" />
                  <span id = "forget_email_status"></span>
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <button type="submit" class="btn btn-secondary btn-block btn-lg">
                    Reset Password &nbsp; <i class="fa fa-refresh"></i>
                  </button>
                </div> <!-- /.form-group -->

                <div class="form-group">
                  <a data-dismiss="modal" href="#login"><i class="fa fa-angle-double-left"></i> &nbsp;Back to Login</a>
                </div> <!-- /.form-group -->
              </form>
            </div>
          </div> <!-- /.account-wrapper -->
          
        </div>

        <!--Modal footer-->
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
          <button class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!--===================================================-->
  <!--Forget Password Modal ends-->

    <!--===================================================-->
    <!-- END OF CONTAINER -->


        
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="<?= $this-> baseUrl ?>static/js/jquery-2.1.1.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="<?= $this-> baseUrl ?>static/js/bootstrap.min.js"></script>


    <!--Fast Click [ OPTIONAL ]-->
    <script src="<?= $this-> baseUrl ?>static/plugins/fast-click/fastclick.min.js"></script>

    
    <!--Nifty Admin [ RECOMMENDED ]-->
    <script src="<?= $this-> baseUrl ?>static/js/nifty.min.js"></script>


    <!--Background Image [ DEMONSTRATION ]-->
    <script src="<?= $this-> baseUrl ?>static/js/demo/bg-images.js"></script>

    
    <!--

    REQUIRED
    You must include this in your project.

    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.

    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.

    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.

    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    -->
  

  <script type="text/javascript">
    function validateLog(){
        returnBool = true;
        if($('#username').val() == "" || $('#username').val() == null){
            $('#username').css("border-color", "red");
            //returnBool = false;
            return false;
        }
        else if($('#password').val() == "" || $('#password').val() == null){
            $('#password').css("border-color", "red");
            //returnBool = false;
            return false;
        }
        else {
            $('span[id^="password_span"]').empty();
            var dataString = "";
            dataString = "username=" + $('#username').val() + "&password=" + $('#password').val(); 

            $.ajax({
              type: "POST",
              url: "<?= $this-> baseUrl?>"+"home/login",
              data: dataString,
              cache: false,
              success: function(result){
                console.log("insode success");
                //alert(result);
                var hash = window.location.hash.slice(); //Puts hash in variable, and removes the # character;
                if (hash){
                  hash = (hash.split("?")[1]).split("=")[1];
                  window.location.replace(hash);              
                }
                else{
                  location.reload();
                }
              },
              error: function(result){
                console.log("insode error");
                //alert(result);
                $('#username').css("border-color", "red");
                $('#password').css("border-color", "red");

                $("#password_span").append("<font color='red'>Incorrect Value for Username or Password</font>");
                setTimeout(function () {
                  $('span[id^="password_span"]').empty();
                }, 15000);
              }

            });
        }
        return false;
        //return returnBool;
    }

    function validateForgetPassword(){
        returnBool = true;
        if($('#forget_email').val() == "" || $('#forget_email').val() == null){
            $('#forget_email').css("border-color", "red");
            //returnBool = false;
            return false;
        }
        else {
            $('span[id^="forget_email_status"]').empty();
            var dataString = "";      
            dataString = "forget_email=" + $('#forget_email').val(); 
            
            $.ajax({
              type: "POST",
              url: "<?= $this-> baseUrl?>"+"home/forgetPassword",
              data: dataString,
              cache: false,
              success: function(result){
                $("#forget_email_status").append(result);
                setTimeout(function () {
                  $('span[id^="forget_email_status"]').empty();
                }, 10000);
              },
              error: function(result){
                $("#forget_email_status").append(result);
                setTimeout(function () {
                  $('span[id^="forget_email_status"]').empty();
                }, 10000);
              }

            });
        }
        return false;
        //return returnBool;
    }
    </script>

</body>
</html>
