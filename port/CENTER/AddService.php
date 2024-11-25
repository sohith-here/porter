<?php
session_start();
$uid = $_SESSION['uid'];
include '../CONNECTION/DbConnection.php';
include 'centerHead.php';
?>




<div class="w3l-contact-10 py-5" id="contact">
    <div class="form-41-mian pt-lg-4 pt-md-3 pb-lg-4">
        <div class="container">
            <div class="heading text-center mx-auto">
                <h5 class="title-subw3hny text-center"></h5>
                <h3 class="title-w3l">Add service <span class="inn-text"> </span></h3>
            </div>
            <div class="form-inner-cont mt-5">
                <form method="post" class="signin-form" enctype="multipart/form-data">
                    <div class="form-grids">
                        <div class="form-input">
                            <input type="text" name="service" id="w3lName" placeholder="Service" required="" />
                        </div>
                        <div class="form-input">
                            <input type="text" name="from" id="w3lSubject" placeholder="From" required />
                        </div>
                        <div class="form-input">
                            <input type="text" name="to" id="w3lSubject" placeholder="To" required />
                        </div>
                        <div class="form-input">
                            <input type="number" name="price" id="w3lSubject" placeholder="Price" required />
                        </div>
                        
                    </div>
                    <div class="form-input">
                        <textarea name="desc" id="w3lMessage" placeholder="Description" required=""></textarea>
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


    <section class="w3l-blog">
    <div class="blog py-5" id="Newsblog">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-lg-3 mb-4">
                <h6 class="title-subw3hny mb-1">Services</h6>
                <h3 class="title-w3l mb-5">Services <br></h3>
            </div>

            <div class="row justify-content-center">
                <?php
                $res = mysqli_query($conn, "SELECT * FROM `tb_service` WHERE center_id='$uid'");
                while ($rs = mysqli_fetch_array($res)) {
                ?>
                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog" class="zoom d-block">
                                </a>
                            </div>
                            <div class="card-body blog-details">

                                <a href="#blog" class="blog-desc"><?php echo $rs['servicename'] ?></a>
                                <p> <?php echo $rs['description'] ?></p>
                                <p> <?php echo $rs['from'] ?></p>-<p> <?php echo $rs['to'] ?></p>
                                <p>💲 <?php echo $rs['fee'] ?></p>
                            </div>
                            <div class="card-footer">
                                <div class="author align-items-center">
                                    <a href="#author" class="post-author">
                                    </a>
                                    <ul class="blog-meta">
                                        <li>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php

                }
                ?>

            </div>

        </div>
    </div>
</section>

    <?php
    include '../COMMON/commonfooter.php';
    ?>



<?php

    if (isset($_REQUEST['register'])) {
    

        $service = $_REQUEST['service'];
        $price = $_REQUEST['price'];
        $desc = $_REQUEST['desc'];
        $from=$_REQUEST["from"];
        $to=$_REQUEST["to"];
    

        $qryCheck = "SELECT COUNT(*) AS cnt FROM `tb_service` WHERE `servicename` = '$service'";
echo $qryCheck;
        $qryOut = mysqli_query($conn, $qryCheck);

        $fetchData = mysqli_fetch_array($qryOut);
        
        if ($fetchData['cnt'] > 0) {
            echo "<script>alert('Already exist with  same Service name ');window.location = 'AddService.php';</script>";
        } else {

            $qryReg = "INSERT INTO `tb_service`(`center_id`,`servicename`,`description`,`fee`,`from`,`to`)VALUES('$uid','$service','$desc','$price','$from','$to')";
          
            echo $qryReg ;

            if ($conn->query($qryReg) == TRUE ) {
                echo "<script>alert(' Success');window.location = 'AddService.php';</script>";
            } else {
                echo "<script>alert(' Failed');
                // window.location = 'AddService.php';</script>";
            }
        }
    }
    ?>