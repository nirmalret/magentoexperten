<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Magentoxperten | Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="login-wrapper">
        <div class="logo">
                <a href="#"> <img src="img/logo-mx.png" alt="Magentoexperten"></a>
                <div class="login-form">
                    <form class="form-horizontal" action="index.php" method="post">
                        <input class="form-control xinput" type="text" placeholder="Enter your Username" id="username" name="username">
                        <input class="form-control xinput" type="password" placeholder="Enter your Password" id="password" name="password">
                        <button class="btn btn-login">Log In</button>
                        <br>
                        <label class="register">Don't have account? <span data-toggle="modal" data-target="#register-modal">Register Now !!</span></label>
                    </form>
                </div>
        </div><!-- logo -->
    </div><!-- Login Wrapper -->

    <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Register Now</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div><!-- Register modal -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>