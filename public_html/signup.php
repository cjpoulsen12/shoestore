﻿<!-- Christopher -->

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Shoe Store - Signup</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">


    <!-- Custom Color Scheme -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

</head>

<body>
  
    <div>
        <div class="container">
            <div class="page-header">
                <h1><a class="customHeader" href="index.html">The Shoe Store</a></h1>
            </div>
        </div>

        <div class="container customNavContainer">
            <nav class="navbar navbar-right customNav">
                <ul class="nav nav-pills ">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="location.html">Locations</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a class="customActive" href="signup.html">Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </div>

    

    <div class="row">
        <div class="container col-lg-4 col-lg-offset-4">

            <div>
                <h2>Sign up</h2>
            </div>
            <form>

                <div class="form-group">
                    <label class="text-left">First Name:</label><br />
                    <input type="text" class="form-control input-lg" name="firstName" placeholder="Enter First Name"><br />
                </div>
                <div class="form-group">
                    <label>Last Name:</label><br />
                    <input type="text" class="form-control input-lg" name="lastName" placeholder="Enter Last Name"><br />
                </div>

                <div class="form-group">
                    <label>Email address:</label><br />
                    <input type="email" class="form-control input-lg" name="email" placeholder="Enter email address"><br />
                </div>
                <div class="form-group">
                    <label>Password:</label><br />
                    <input type="password" class="form-control input-lg" name="password" placeholder="Create a Password"><br>
                </div>
                <div class="form-group">
                    <label>Confirm Password:</label><br />
                    <input type="password" class="form-control input-lg" name="password" placeholder="Create a Password"><br>
                </div>
                <a href="login.html" class="btn btn-primary center-block" role="button" >Sign Up
              </a>
            </form>
        </div>
    </div>


        <div class="container col-lg-4 col-lg-offset-4">

            <h4>Have an Account? Log in <a class="customLink" href="login.html">here.</a> </h4>

            

        </div>
        

    <div class="footer">
        <div class="container col-lg-4 col-lg-offset-4">
            <footer>
                <div>
                    <h4>
                        Follow us
                    </h4>
                    <ul class="list-unstyled list-inline">
                        <li>
                            <img src="img/content/facebook_icon.png" alt="Facebook Icon" height="25" width="25" />
                        </li>
                        <li>
                            <img src="img/content/twitter_icon.png" alt="Twitter Icon" height="25" width="25" />
                        </li>
                        <li>
                            <img src="img/content/amazon_icon.png" alt="Amazon Icon" height="25" width="25" />
                        </li>
                    </ul>

                    <p>
                        <small>
                        © 2016 The Shoe Store Inc. All Rights Reserved.
                        </small>
                    </p>
                </div>
            </footer>
        </div>
    </div>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
