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
                <h3 class="title-w3l">Add Products <span class="inn-text"> </span></h3>
            </div>
            <div class="form-inner-cont mt-5">
                <form method="post" class="signin-form" enctype="multipart/form-data">
                    <div class="form-grids">
                        <div class="form-input">
                            <input type="text" name="pname" id="w3lName" placeholder="Product name" required="" />
                        </div>
                        <div class="form-input">
                            <select class="form-input" name="pcategory">
                                <option> Category</option>
                                <?php
                                $res = mysqli_query($conn, "SELECT * from `category`");
                                while ($rs = mysqli_fetch_array($res)) {
                                    echo "<option>" . $rs['1'] . "</option>";
                                }

                                ?>
                            </select>
                        </div>
                        <div class="form-input">
                            <select class="form-input" name="pbrand">
                                <option>Brand</option>
                                <?php
                                $res = mysqli_query($conn, "SELECT * from `brand`");
                                while ($rs = mysqli_fetch_array($res)) {
                                    echo "<option>" . $rs['1'] . "</option>";
                                }

                                ?>
                            </select>
                        </div>
                        <div class="form-input">
                            <input type="number" name="price" id="w3lSubject" placeholder="Price " required />
                        </div>
                        <div class="form-input">
                            <input type="number" name="Warranty" id="w3lSubject" placeholder="Cappacity" required />
                        </div>
                        <div class="form-input">
                            <input type="file" name="file" id="w3lPhone" placeholder=" file " required />
                        </div>
                    </div>
                    <div class="form-input">
                        <textarea name="Features" id="w3lMessage" placeholder="Features" required=""></textarea>
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
                <h6 class="title-subw3hny mb-1">Products</h6>
                <h3 class="title-w3l mb-5">Products <br></h3>
            </div>

            <div class="row justify-content-center">
            <?php
            $res = mysqli_query($conn, "SELECT * FROM tb_product WHERE centerid=$uid");
            while ($rs = mysqli_fetch_array($res)) {
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
                                <p>Warranty   <?php echo $rs['warranty']; ?> /- Months </p>
                                <p>  <?php echo $rs['features'] ?></p>
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

    $uid = $_SESSION['uid'];
    if (isset($_REQUEST['register'])) {

        $pname = $_REQUEST['pname'];
        $Features = $_REQUEST['Features'];
        $price = $_REQUEST['price'];
        $Warranty = $_REQUEST['Warranty'];;
        $pcategory = $_REQUEST['pcategory'];
        $pbrand = $_REQUEST['pbrand'];

        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $folder = "image/" . $filename;

        if (move_uploaded_file($tempname, '../assets/image/' . $filename)) {
            $qryCheck = "SELECT COUNT(*) AS cnt FROM `tb_product` WHERE `productname` = '$pname' and `price` = '$price' and centerid='$uid'";

            $qryOut = mysqli_query($conn, $qryCheck);

            $fetchData = mysqli_fetch_array($qryOut);

            if ($fetchData['cnt'] > 0) {
                echo "<script>alert('Already exist ');
             window.location = 'addproduct.php';
            </script>";
            } else {

                $qryReg = "INSERT INTO tb_product(`centerid`,`productname`,`category`,`brand`,`price`,`warranty`,`features`,`image`)VALUES('$uid','$pname','$pcategory','$pbrand','$price','$Warranty','$Features','$filename')";

                echo $qryReg . "&& ";

                if ($conn->query($qryReg) == TRUE) {
                    echo "<script>alert(' Success');window.location = 'addproduct.php';</script>";
                } else {
                    echo "<script>alert(' Failed');window.location = 'addproduct.php';</script>";
                }
            }
        }
    }
    ?>





    <?php
    include '../COMMON/commonfooter.php';
    ?>