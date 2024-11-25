<?php
session_start();
$uid = $_SESSION['uid'];
include '../CONNECTION/DbConnection.php';
include 'userHeader.php';
?>


<section class="w3l-blog">
    <div class="blog py-5" id="Newsblog">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-lg-3 mb-4">
                <h6 class="title-subw3hny mb-1">Our Center</h6>
                <h3 class="title-w3l mb-5">Approved Centers <br></h3>
            </div>

            <div class="row justify-content-center">
                <?php
                $res = mysqli_query($conn, "SELECT shop.*,login.* FROM shop ,login WHERE  shop.`s_id`=login.`reg_id` AND login.type='SHOP' AND login.`status`='Approved'");
                while ($rs = mysqli_fetch_array($res)) {
                ?>
                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="../assets/image//<?php echo $rs['photo'] ?>" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body blog-details">

                               
                                    <ul class="blog-meta">
                                        <li>
                                            <span class="meta-value"></span><a href="viewmoreproducts.php?sid=<?php echo $rs['reg_id'] ?>" class="btn btn-warning" style="color: white; margin-left:10px;"> View Vehicles</a>
                                            <span class="meta-value"></span><a href="viewmoreservices.php?sid=<?php echo $rs['reg_id'] ?>" class="btn btn-secondary" style="color: white; margin-left:30px;"> Services</a>
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