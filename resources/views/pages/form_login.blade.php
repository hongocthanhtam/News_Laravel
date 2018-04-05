<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-offset-3" style="margin-top:100px;">
                <form action="" method="post">
                    <input type="hidden" name="_token" value="">
                    <div class="panel panel-info">
                        <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <div class="col-md-12" style="margin-top: 5px; color: #1997F8;">
                            <div class="col-md-4">Username</div>
                            <div class="col-md-8">
                                <input type="text" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 5px;color:#1997F8;">
                            <div class="col-md-4">Password</div>
                            <div class="col-md-8">
                               <input type="password" name="password" class="form-control" required>
                           </div>
                        </div>
                        <!-- submit -->
                        <div class="col-md-12" style="margin-top: 5px; color: black;">
                            <div class="col-md-3 col-xs-offset-4">
                                <input type="submit" class="btn btn-info" value="Login">
                            </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>