<?php

session_start();

require_once '../includes/auto-checker.php';
require_once '../classes/basic.database.php';
require_once '../classes/renting.class.php';
require_once '../classes/account.class.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile</title>
    <link a hr\

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    <link rel="stylesheet" href="../css/homepage.css">
    <link rel="stylesheet" href="../css/renting.css">

</head>
<body>

<?php

require_once ('../includes/topnav.php');

    if(!isset($_GET['girl'])){
        header('location: ../user/homepage.php');
    }
    else{
        $id =(int)$_GET['girl'];

        $girlQuery = $db->prepare("SELECT id, firstname, lastname, age, skin_type, breast_size, waist_line,  height, rate, description,  image FROM girls WHERE id = :girl");

        $girlQuery->execute([
            'girl' => $id
        ]);

        $girl = $girlQuery->fetchObject();


        $accountQuery = $db->prepare("SELECT id, firstname, lastname FROM user WHERE id = :users");

        $accountQuery->execute([
            'users' => $_SESSION['user']
        ]);

        $user = $accountQuery->fetchObject();



    }

    if(isset($_POST['submit'])){

        $wamen = new Renting();
        //sanitize user inputs
        $wamen->user = htmlentities($_POST['user_id']);
        $wamen->girl = htmlentities($_POST['id']);
        if($wamen->add()){
            //redirect user to program page after saving
             header('location: homepage.php');
        }
    }


?>

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
          <h1><strong>Profile Details</strong></h1>
                <h1>A Rental Girlfriend Profile Page</h1>
            </div>
        </div>
    </div>
</header>


<?php  ?>
<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
<form action="" method="POST">
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="<?php echo $girl->image?>" alt="profile dp">
            <h3><?php echo $girl->firstname?> <?php echo $girl->lastname?></h3>


          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i><strong>Information</strong></h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Age</th>
                <td width="2%">:</td>
                <td><?php echo $girl->age?></td>
              </tr>
              <tr>
                <th width="30%">Height</th>
                <td width="2%">:</td>
                <td><?php echo $girl->height?></td>
              </tr>
              <tr>
                <th width="30%">Skin Type</th>
                <td width="2%">:</td>
                <td><?php echo $girl->skin_type?></td>
              </tr>
              <tr>
                <th width="30%">Breast Size</th>
                <td width="2%">:</td>
                <td><?php echo $girl->breast_size?></td>
              </tr>
              <tr>
                <th width="30%">Waist Line</th>
                <td width="2%">:</td>
                <td><?php echo $girl->waist_line?></td>
              </tr>
              <tr>
                <th width="30%">Rate</th>
                <td width="2%">:</td>
                <td>₱<?php echo $girl->rate?> / Hours</td>
              </tr>
              <tr>
                <th width="30%">Description</th>
                <td width="2%">:</td>
                <td><?php echo $girl->description?></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="button-class">
            <button class="btn fav-btn" type="submit" name="submit">Confirm</button>
            <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
            <input type="hidden" name="id" value="<?php echo $girl->id?>">
        </div>
		</div>
    </form>
    </section>

	</body>
</html>