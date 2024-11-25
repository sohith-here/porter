<?php
session_start();
include '../CONNECTION/DbConnection.php';
include 'userHeader.php';
$uid = $_SESSION['uid'];
?>

<section class="w3l-blog">
    <div class="blog py-5" id="Newsblog">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-lg-3 mb-4">
                <h6 class="title-subw3hny mb-1"></h6>
                <h3 class="title-w3l mb-5"> Products Bookings <br></h3>
            </div>

            <div class="row justify-content-center">
                <?php
                $res = mysqli_query($conn, "SELECT * FROM `tb_cart` C , `tb_product` P,`shop` S WHERE C.`cusid`='$uid' AND C.`centerid`=S.`s_id` AND C.`itemid`= P.`productcode` AND C.`status`='paid'");
                while ($rs = mysqli_fetch_array($res)) {

                    $centerid = $rs['s_id'];
                ?>
                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="../assets/image//<?php echo $rs['image'] ?>" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body blog-details">

                                <a href="#blog" class="blog-desc"><?php echo $rs['productname'] ?></a>
                                <p>💲 <?php echo $rs['price'] ?></p>
                                <p>Warranty <?php echo $rs['warranty']; ?> /- Months </p>
                                <p> <?php echo $rs['features'] ?></p>
                            </div>
                            <div class="card-footer">
                                <div class="author align-items-center">
            
                                    <a href="#author" class="post-author">
                                    </a>
                                    <button >review</button>
                                    <ul class="blog-meta">
                                        <li>
                                            <span class="meta-value"></span><a style="margin-left: 170px;" href="#author"> <?php echo $rs['date'] ?></a>

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




<section class="w3l-blog">
    <div class="blog py-5" id="Newsblog">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-lg-3 mb-4">
                <h6 class="title-subw3hny mb-1">Service Bookings</h6>
                <h3 class="title-w3l mb-5">Service Bookings <br></h3>
            </div>

            <div class="row justify-content-center">
                <?php
                $res = mysqli_query($conn, "SELECT * FROM `tb_service_booking` C , `tb_service` P,`shop` S WHERE C.`centerid`=S.`s_id` AND C.`serviceid`= P.`servicebookid` AND C.`customer_id`='$uid'");
                while ($rs = mysqli_fetch_array($res)) {
                ?>
                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog" class="zoom d-block">
                                </a>
                            </div>
                            <div class="card-body blog-details">

                                <a href="#blog" class="blog-desc"><?php echo $rs['sname'] ?></a>
                                <a href="#blog" class="blog-desc"><?php echo $rs['servicename'] ?></a>
                                <p> <?php echo $rs['description'] ?></p>
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