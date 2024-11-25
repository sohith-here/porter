<?php
include 'adminheader.php';
include '../CONNECTION/DbConnection.php';
?>


<section class="w3l-blog">
    <div class="blog py-5" id="Newsblog">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-lg-3 mb-4">
                <h6 class="title-subw3hny mb-1">Our User</h6>
                <h3 class="title-w3l mb-5">Users <br></h3>
            </div>

            <div class="row justify-content-center">
                <?php
                $res = mysqli_query($conn, "SELECT * FROM `user`");
                while ($rs = mysqli_fetch_array($res)) {
                ?>
                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog" class="zoom d-block">
                                </a>
                            </div>
                            <div class="card-body blog-details">

                                <a href="#blog" class="blog-desc"><?php echo $rs['uname'] ?></a>
                                <p>📞 <?php echo $rs['uphoneno'] ?></p>
                                <p>✉️ <?php echo $rs['uemail'] ?></p>
                                <p> <?php echo $rs['uaddress'] ?></p>
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