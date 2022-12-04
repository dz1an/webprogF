<?php

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }
    //if the above code is false then html below will be displayed


    require_once '../includes_admin/header.php';
    require_once '../includes_admin/sidebar.php';
    require_once '../includes_admin/topnav.php';
?>
    <div class="home-content">
        <div class="table-container">
            <div class="table-heading">
                <h3 class="table-title">Girls Profile</h3>
                <?php
                    if($_SESSION['user_type'] == 'admin'){
                ?>
                    <a href="addgirl.php" class="button">Add New Girl</a>
                <?php
                    }
                ?>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Full Name</th>
                        <th>Age</th>
                        <th>Skin Type</th>
                        <th>Breast Size</th>
                        <th>Waist Line</th>
                        <th>Height</th>
                        <th>Rate</th>
                        <?php
                            if($_SESSION['user_type'] == 'admin'){
                        ?>
                            <th class="action">Action</th>
                        <?php
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once '../classes/girl.class.php';

                        $wamen = new Girls();
                        //We will now fetch all the records in the array using loop
                        //use as a counter, not required but suggested for the table
                        $i = 1;
                        //loop for each record found in the array
                        foreach ($wamen->show() as $value){ //start of loop
                    ?>
                        <tr>
                            <!-- always use echo to output PHP values -->
                            <td><?php echo $i ?></td>
                            <td><img src="<?php echo $value['image'] ?>" alt="" width="100" height="150"></td>
                            <td><b><?php echo $value['firstname']?> <?php echo $value['lastname'] ?></b></td>
                            <td><?php echo $value['age'] ?></td>
                            <td><?php echo $value['skin_type'] ?></td>
                            <td><?php echo $value['breast_size'] ?></td>
                            <td><?php echo $value['waist_line'] ?></td>
                            <td><?php echo $value['height'] ?></td>
                            <td>₱<?php echo $value['rate'] ?></td>
                            <?php
                                if($_SESSION['user_type'] == 'admin'){
                            ?>
                                <td>
                                    <div class="action">
                                        <a class="action-edit" href="editgirl.php?id=<?php echo $value['id'] ?>">Edit</a>
                                        <a class="action-delete" href="deletegirl.php?id=<?php echo $value['id']?>">Delete</a>
                                    </div>
                                </td>
                            <?php
                                }
                            ?>
                        </tr>
                    <?php
                        $i++;
                    //end of loop
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
    require_once '../includes_admin/bottomnav.php';
    require_once '../includes_admin/footer.php';
?>

<div id="delete-dialog" class="dialog" title="Delete User">
    <p><span>Are you sure you want to delete the selected record?</span></p>
</div>

<script>
    $(document).ready(function() {
        $("#delete-dialog").dialog({
            resizable: false,
            draggable: false,
            height: "auto",
            width: 400,
            modal: true,
            autoOpen: false
        });
        $(".action-delete").on('click', function(e) {
            e.preventDefault();
            var theHREF = $(this).attr("href");

            $("#delete-dialog").dialog('option', 'buttons', {
                "Yes" : function() {
                    window.location.href = theHREF;
                },
                "Cancel" : function() {
                    $(this).dialog("close");
                }
            });

            $("#delete-dialog").dialog("open");
        });
    });
</script>