<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <div class="container">
            <div class="row " style="height:200px">
                
            </div>
            <form action="controller/login_controller.php?status=login" method="post">
                <div class="col-md-8 col-md-offset-2 panel panel-default">
                <div class="col-md-12" style="height:400px">
                    <div class="row">&nbsp;</div>
                    <div class="row">
                        <div id="msg" class="col-md-6 col-md-offset-3"></div>
                            <?php
                                if (isset($_GET["msg"])) {      
                            ?>
                                <div class="col-md-6 col-md-offset-3 alert alert-danger">
                                    <?php echo base64_decode($_GET["msg"]); ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div> 
                    <div class="row my-5">
                        <label style="font-size:18px;">Log Into Your Account</label>
                    </div> 
                    <div class="row">
                        <div class="col-md-12">
                            <span class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" name="loginusername" id="loginusername" class="form-control">
                            </span>
                        </div>  
                    </div>   
                    <div class="row">&nbsp;</div>   
                    <div class="row">
                        <div class="col-md-12">
                            <span class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </span>
                                <input type="password" name="loginpassword" id="loginpassword" class="form-control">
                            </span>
                        </div>
                    </div>
                    <div class="row">&nbsp;</div>
                    <div class="row">
                        <div class="col-md-12">
                            <input 
                                type="submit" 
                                class="btn btn-primary btn-block" 
                                name="submit" 
                                style="background-color: #170680;"
                            >  
                        </div>
                    </div>
                </div>
                </div>
            </form>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="js/jquery-3.7.1.js"></script>
    </body>
</html>
