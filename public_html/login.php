<!-- Christopher -->

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Shoe Store - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">


    <!-- Custom Color Scheme -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

</head>
<body>
    <!--Navigation Bar-->
    <?php include '../resources/navigation.php'; ?>

    <div class="row">
        <div class="container col-lg-4 col-lg-offset-4">
            <div>
                <h2>Log in to your account</h2>
            </div>
            <div class="form-group">
                <label>Email address:</label><br />
                <input type="email" class="form-control input-lg" name="email" placeholder="Enter Email Address"><br />
            </div>
            <div class="form-group">
                <label>Password:</label><br />
                <input type="password" class="form-control input-lg" name="password" placeholder="Enter Password"><br><br>
            </div>
            
           <a href="index.php" class="btn btn-primary center-block" role="button" >Log In
              </a>
            
            
            
            <div>
                <h4> <a class="customLink" href="signup.php">Create an account</a> </h4>
            </div>
        </div>
    </div>
    
 

    <!--Footer Bar-->
    <?php include '../resources/footer.php'; ?>
        <!-- Scripts required to make Bootstrap work better. -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>