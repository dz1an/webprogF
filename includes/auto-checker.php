<?php

    if(!isset($_SESSION['logged-in'])){
        header('location: ./login/login.php');
    }

?>