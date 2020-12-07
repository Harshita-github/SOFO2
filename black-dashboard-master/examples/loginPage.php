





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style_login.css">
    <title>Login Page</title>
  </head>
  <body>
  <form action= "login_db.php"   method ="post" enctype="multipart/form-data">
    <div class="container px-4 py-5 mx-auto ">
    <div class="card card0 ">
        <div class="d-flex flex-lg-row flex-column-reverse ">
            <div class="card card1 bg-dark "><!-- /*THIS*/ -->
                <div class="row justify-content-center my-auto ">  
                    <div class="col-md-8 col-10 my-5 ">
                        <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="../assets/img/logo.png" alt="logo"\> </div>
                        <h3 class="mb-5 text-center heading">LOGIN</h3>
                        <h6 class="msg-info">Please login to your account</h6>
                        <div class="form-group"> <label class="form-control-label ">Username</label> <input type="text" id="email" name="email" placeholder="Email id" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label ">Password</label> <input type="password" id="psw" name="psw" placeholder="Password" class="form-control"> </div>
                        
                        <?php
if(isset($_GET["error"]))
{
    if($_GET["error"] == "emptyinput")
    {
        echo "   <p> Fill all the required fields. </p>";
    }
    else if($_GET["error"]== "wronguser")
    {
        echo "<p> User does not exist.</p>";
    }
    else if($_GET["error"]== "wronglogin")
    {
        echo "<p> Incorrect Password </p>";
    }
}
?>
                        <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color" style= "width: 260px" type="submit" name="submit">Login</button> </div>
                        <div class="row justify-content-center my-2"> <a href="#"><small class="text-white"><a href="forgotpwd.php">Forgot Password?</a></small></a> </div>
                        <div class="row justify-content-center my-2"> <a href="#"><small class="text-white"><a href="">Contact us</a></small></a> </div>

                    </div>
                </div>
                
            </div>
            <div class="card card2 ">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">We are more than just a website.</h3> <small class="text-white">
                        We are here to revolutionalize digital innovation and transformation by simplifying the process of requirement gathering.
                        
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

   

    
   

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
  </body>
</html>