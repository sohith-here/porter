<?php
session_start();
include './COMMON/commonheader.php';
include './CONNECTION/DbConnection.php';
?>
<div class="w3l-contact-10 py-5" id="contact">
    <div class="form-41-mian pt-lg-4 pt-md-3 pb-lg-4">
        <div class="container">
            <div class="heading text-center mx-auto">
                <h5 class="title-subw3hny text-center"></h5>
                <h3 class="title-w3l">User Registration <span class="inn-text"> </span></h3>
            </div>
            <div class="form-inner-cont mt-5">
                <form method="post" class="signin-form" enctype="multipart/form-data">
                    <div class="form-grids">
                        <div class="form-input">
                            <input type="text" name="fname" id="w3lName" placeholder="Full name" required="" />
                        </div>
                        <div class="form-input">
                            <input type="text" name="phone" id="w3lSubject" placeholder="Phone " pattern="[789][0-9]{9}" maxlength="10" required />
                        </div>
                        <div class="form-input">
                            <input type="email" name="email" id="w3lSender" placeholder=" Email " required />
                        </div>
                        <div class="form-input">
                            <input type="password" name="password" id="w3lPhone" placeholder=" Password " required />
                        </div>
                    </div>
                    <div class="form-input">
                        <textarea name="address" id="w3lMessage" placeholder="Address" required=""></textarea>
                    </div>
                    <br><br><br><br>
                    <div class="w3-submit text-center">
                        <button type="submit" name="register" class="btn btn-style btn-primary">Register <i class="fas fa-paper-plane ms-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br><br>



    <?php
    include './COMMON/commonfooter.php';
    ?>

    <?php
    if (isset($_REQUEST['register'])) {

        $Name = $_REQUEST['fname'];
        $Phone = $_REQUEST['phone'];
        $Address = $_REQUEST['address'];
        $Email = $_REQUEST['email'];
        $Password = $_REQUEST['password'];

        $qryCheck = "SELECT COUNT(*) AS cnt FROM `user` WHERE `uemail` = '$Email' OR `uphoneno` = '$Phone'";

        $qryOut = mysqli_query($conn, $qryCheck);

        $fetchData = mysqli_fetch_array($qryOut);

        if ($fetchData['cnt'] > 0) {
            echo "<script>alert('Already exist an Account with same Email / Phone Number');window.location = 'UserRegistration.php';</script>";
        } else {

            $qryReg = "INSERT INTO `user`(`uname`,`uemail`,`uaddress`,`uphoneno`)VALUES('$Name','$Email','$Address','$Phone')";
            $qryLog = "INSERT INTO login(`reg_id`, `email`, `password`, `type`,`status`) VALUES((select max(uid) from user), '$Email', '$Password', 'USER','approved')";

            echo $qryReg . "&& " . $qryLog;

            if ($conn->query($qryReg) == TRUE && $conn->query($qryLog) == TRUE) {
                echo "<script>alert('Registration Success');window.location = 'login.php';</script>";
            } else {
                echo "<script>alert('Registration Failed');window.location = 'UserRegistration.php';</script>";
            }
        }
    }
    ?>
