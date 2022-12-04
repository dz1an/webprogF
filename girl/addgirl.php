<?php

    require_once '../tools/functions.php';
    require_once '../classes/girl.class.php';

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['logged-in'])){
        header('location: ../homepage/homepage.php');
    }
    //if the above code is false then code and html below will be executed

    //if add faculty is submitted
    if(isset($_POST['save'])){

        $girls = new Girls();
        //sanitize user inputs
        $girls->firstname = htmlentities($_POST['firstname']);
        $girls->lastname = htmlentities($_POST['lastname']);
        $girls->age = htmlentities($_POST['age']);
        $girls->skin_type = htmlentities($_POST['skin_type']);
        $girls->breast_size = htmlentities($_POST['breast_size']);
        $girls->waist_line = htmlentities($_POST['waist_line']);
        $girls->height = htmlentities($_POST['height']);
        $girls->rate = htmlentities($_POST['rate']);
        $girls->description = htmlentities($_POST['description']);
        $girls->image = htmlentities($_POST['image']);
        if($girls->add()){
            //redirect user to program page after saving
             header('location: girl.php');
        }

    }

    require_once '../includes_admin/header.php';
    require_once '../includes_admin/sidebar.php';
    require_once '../includes_admin/topnav.php';

?>
    <div class="home-content">
        <div class="table-container">
            <div class="table-heading form-size">
                <h3 class="table-title">Add New Girl</h3>
                <a class="back" href="girl.php"><i class='bx bx-caret-left'></i>Back</a>
            </div>
            <div class="add-form-container">
                <form class="add-form" action="addgirl.php" method="post">

                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" required placeholder="Enter Firstname" value="<?php if(isset($_POST['firstname'])) { echo $_POST['firstname']; } ?>">

                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" required placeholder="Enter Lastname" value="<?php if(isset($_POST['lastname'])) { echo $_POST['lastname']; } ?>">

                    <label for="age">Age</label>
                    <input type="text" id="age" name="age" required placeholder="Enter Age" value="<?php if(isset($_POST['age'])) { echo $_POST['age']; } ?>">

                    <label for="skin_type">Skin Type</label>
                    <input type="text" id="skin_type" name="skin_type" required placeholder="Enter Skin Type" value="<?php if(isset($_POST['skin_type'])) { echo $_POST['skin_type']; } ?>">

                    <label for="breast_size">Breast Size</label>
                    <input type="text" id="breast_size" name="breast_size" required placeholder="Enter Breast Size" value="<?php if(isset($_POST['breast_size'])) { echo $_POST['breast_size']; } ?>">

                    <label for="waist_line">Waist Line</label>
                    <input type="text" id="waist_line" name="waist_line" required placeholder="Enter Waist Line" value="<?php if(isset($_POST['waist_line'])) { echo $_POST['waist_line']; } ?>">

                    <label for="height">Height</label>
                    <input type="text" id="height" name="height" required placeholder="Enter Height" value="<?php if(isset($_POST['height'])) { echo $_POST['height']; } ?>">

                    <label for="rate">Rate</label>
                    <input type="text" id="rate" name="rate" required placeholder="Enter Rate" value="<?php if(isset($_POST['rate'])) { echo $_POST['rate']; } ?>">

                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" required placeholder="Enter Description" value="<?php if(isset($_POST['description'])) { echo $_POST['description']; } ?>">

                    <label for="image">Image</label>
                    <input type="text" id="image" name="image" required placeholder="Enter Image Link" value="<?php if(isset($_POST['image'])) { echo $_POST['image']; } ?>">


                    <input type="submit" class="button" value="Save Girl" name="save" id="save">
                </form>
            </div>
        </div>
    </div>

<?php
    require_once '../includes_admin/bottomnav.php';
    require_once '../includes_admin/footer.php';
?>