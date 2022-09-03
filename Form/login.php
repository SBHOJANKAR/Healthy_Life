<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </head>

<body>
    
  <div class="container">

        <div class="row">
            <div class="col-sm-4">
            </div>

            <div class="col-sm-4">
                <div class="login_form">

                <img src="img1.jpg" alt="" class="logo img-fluid"S>
            <form>
                <div class="form-group">
                    <label class="label_txt" for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                        <label class="label_txt" for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                
                <button type="submit" class="btn btn-primary form_btn"><a href="home.php" style="text-decoration:none; color:white;"> Submit</a></button>
            </form>

            <p style="font-size: 12px; text-align: center; margin-top: 10px;">
                <a href="forgot-password.php" style="color: #00376b;">Forgot Password</a>
            </p>

                <br>
                <p>Don't have an account? <a href="example.php">Sign Up</a></p>
            </div>
            </div>

            <div class="col-sm-4">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>