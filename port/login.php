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
                <h3 class="title-w3l">Login <span class="inn-text"> </span></h3>
            </div>
            <div class="form-inner-cont mt-5">
                <form method="post" class="signin-form">
                    <div class="form-grids">
                        <div class="form-input">
                            <input type="text" name="Email" id="w3lName" placeholder="Email" required="" />
                        </div>
                        <div class="form-input">
                            <input type="password" name="Password" id="w3lSubject" placeholder="Password " required />
                        </div>
                       </div>
                    <br><br><br><br>
                    <div class="w3-submit text-center">
                        <button type="submit" name="login" class="btn btn-style btn-primary">Login <i class="fas fa-paper-plane ms-2"></i></button>
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
    if (isset($_REQUEST['login'])) {
        $email = $_REQUEST['Email'];
        $password = $_REQUEST['Password'];
        $qry = "SELECT * FROM login WHERE `email` = '$email' AND `password` = '$password'";
        echo $qry;
        $result = mysqli_query($conn, $qry);
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();

            $uid = $data['reg_id'];
            $type = $data['type'];
            $status = $data['status'];

            $_SESSION['uid'] = $uid;
            $_SESSION['type'] = $type;

            if ($type == 'ADMIN') {
                echo "<script>alert('Welcome to AdminHome '); window.location='ADMIN/adminHome.php'</script>";
            } else if ($type == 'USER') {
                echo "<script>alert('Welcome User'); window.location='USER/userHome.php'</script>";
            } else if ($type == 'SHOP' &&  $status == 'Approved') {
                echo "<script>alert('Welcome Shop'); window.location='CENTER/centerHome.php'</script>";
            } else {
                echo "<script>alert('Login Failed')</script>";
            }
        } else {
            echo "<script>alert('Invalid Email / Password'); window.location='login.php'</script>";
        }
    }
    ?>