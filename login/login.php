<?php
    require_once '../classes/account.class.php';

    //we start session since we need to use session values
    session_start();
    //creating an array for list of users can login to the system

    if(isset($_POST['username']) && isset($_POST['password'])){
        //Sanitizing the inputs of the users. Mandatory to prevent injections!
        $users = new Accounts;
        $users->username = htmlentities($_POST['username']);
        $users->password = htmlentities($_POST['password']);
        $res = $users->validate();
        if($res){
            $_SESSION['user'] = $res['id'];
            $_SESSION['logged-in'] = $res['username'];
            $_SESSION['fullname'] = $res['firstname'].' '.$res['lastname'];
            $_SESSION['user_type'] = $res['type'];
            if($res['type'] == 'admin'){
                header('location: ../admin/dashboard.php');
            }else{
                header('location: ../user/homepage.php');
            }
        }
        //set the error message if account is invalid
        $error = 'Invalid username/password. Try again.';
    }

    if(isset($_POST['save'])){

      $account = new Accounts();
      //sanitize user inputs
      $account->firstname = htmlentities($_POST['firstname']);
      $account->lastname = htmlentities($_POST['lastname']);
      $account->type = htmlentities($_POST['type']);
      $account->username = htmlentities($_POST['username']);
      $account->password = htmlentities($_POST['password']);
        if($account->add()){
            //redirect user to program page after saving
            header('location: login.php');
        }
    }
  ?>

<!DOCTYPE html>
<!--  | -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form</title>-->
    <link rel="stylesheet" href="style.css">
    <!--  -->
    <link rel="stylesheet" href="../css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looking for U - Rent your Girlfriendr</title>
    <link  rel="shortcut icon" href="../readme-images/Green_Waste_Busters_Recycling_Symbol_-_Reduce_and_Recycle_Logo_Design_2.png" >
    

   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <!--<img src="images/frontImg.jpg" alt="">-->
        <div class="text">
          <span class="text-1">Hello naughty boy 😉 <br> </span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="#" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="username" placeholder="Enter User Name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Login">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="#" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="firstname" placeholder="Enter Firstname" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="lastname" placeholder="Enter Lastname" required>
              </div>
              <input type="hidden" id="type" name="type"" value="user">
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="text" name="username" placeholder="Enter Usename" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="password" name="password" placeholder="Enter Password" required>
              </div>
              <div class="button input-box">

                <input button type="submit" value="Create Account" name="save" id="save">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>

</body>
</html>