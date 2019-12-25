<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>One Music - Modern Music HTML5 Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../style6.css">

</head>

<body>
    <!-- Preloader -->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <?php
        include "../../subfile/index/HeaderArea.php";
        ?>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(../../img/bg-img/breadcumb3.jpg);">
        <?php
        include "BreadcumbArea.php";
        ?>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
    <section class="album-catagory section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                        <a href="#" data-filter="*">Browse All</a>
                        <form action="timkiem.php" method="get" enctype="multipart/form-data" style="font-size: 20px">
                            Tìm kiếm: <input id="tbh" type="text" name="search" style="border-radius:7px;width:600px" />
                            <button value="search" style="background-color: black;border:0px;border-radius:4px;width:30px"><i class="fa fa-search" aria-hidden="true" style="font-size:20px;color:aliceblue"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <section class="album-catagory section-padding-100-0">
                <div class="row oneMusic-albums">
                    <?php
                    include "../../connect.php";
                    $timkiem = isset($_GET['search']) ? $_GET['search'] : '';
                    $sql = "select * from baihat join casi on baihat.maCaSi=casi.maCaSi where tenBaiHat like ? ";
                    $arr = array("%$timkiem%");
                    $data = $pdh->prepare($sql);
                    $data->execute($arr);
                    $nhac = $data->fetchAll(PDO::FETCH_ASSOC);
                    if(empty($nhac))
                    {
                        echo "<div> Không tìm thấy nhạc cần tìm </div>";
                    }
                    else{
                    foreach ($nhac as $key => $r) { ?>
                        <!-- Single Album -->
                        <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t c p">
                            <div class="single-album" style="width:150px;height:250px">
                                <img src="../../img/hinhcasi/<?php echo $r['Hinhcasi'] ?>" alt="">
                                <div class="album-info">
                                    <a href="../../trangbaihat.php?id=<?php echo $r['maBaiHat'] ?>">
                                        <h5><?php echo $r['tenBaiHat'] ?></h5>
                                    </a>
                                    <p><?php echo $r['tenCaSi'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                }

                    
                    ?>
                </div>
        </div>
    </section>

    <!-- ##### Buy Now Area End ##### -->

    <!-- ##### Add Area Start ##### -->
    <div class="add-area mb-100">
        <?php
        //include "subfile/albums/AddArea.php";
        ?>
    </div>
    <!-- ##### Add Area End ##### -->

    <!-- ##### Song Area Start ##### -->
    <!-- ##### Song Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(../../img/bg-img/bg-2.jpg);">
        <?php
        include "../../subfile/index/ContactArea.php";
        ?>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                    <p class="copywrite-text"><a href="#">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="index.php">Trang Chủ</a></li>
                            <li><a href="albums-store.php">Albums</a></li>
                            <li><a href="event.php">Events</a></li>
                            <li><a href="blog.php">News</a></li>
                            <li><a href="contact.php">Liên Hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>