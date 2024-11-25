<?php
session_start();
$uid = $_SESSION['uid'];
include '../CONNECTION/DbConnection.php';
include 'userHeader.php';
?>



<div class="w3l-contact-10 py-5" id="contact">
    <div class="form-41-mian pt-lg-4 pt-md-3 pb-lg-4">
        <div class="container">
            <div class="heading text-center mx-auto">
                <h5 class="title-subw3hny text-center"></h5>
                <h3 class="title-w3l">Feedback <span class="inn-text"> </span></h3>
            </div>
            <div class="form-inner-cont mt-5">
                <form method="post" class="signin-form">
                    <div class="form-grids">
                        <div class="form-input">
                            <input type="text" name="Subject" id="w3lName" placeholder="Subject" required="" style="margin-left: 300px;" />
                            <textarea name="Description" id="w3lMessage" placeholder="Description" required="" style="margin-left: 300px;"></textarea>
                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="w3-submit text-center">
                        <button type="submit" name="register" class="btn btn-style btn-primary">Add <i class="fas fa-paper-plane ms-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br><br>


    <?php
    if (isset($_REQUEST['register'])) {

        $Description = $_REQUEST['Description'];
        $Subject = $_REQUEST['Subject'];


        $qryReg = "INSERT INTO feedback (`user_id`,`subject`,`description`)VALUES('$uid','$Subject','$Description')";

        echo $qryReg . "&& ";

        if ($conn->query($qryReg) == TRUE) {
            echo "<script>alert(' Success');window.location = 'Feedback.php';</script>";
        } else {
            echo "<script>alert(' Failed');window.location = 'Feedback.php';</script>";
        }
    }
    ?>

    <?php
    include '../COMMON/commonfooter.php';
    ?>