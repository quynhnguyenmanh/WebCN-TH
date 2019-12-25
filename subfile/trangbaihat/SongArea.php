<div class="container">
    <div class="row">
        <!-- Single Song Area -->
        <div class="col-12">
            <?php
            // $pdh = new PDO("mysql:host=localhost; dbname=db_nhac", "root", "");
            // $pdh->query("  set names 'utf8'");
            include "connect.php";
            $id = $_GET['id'];
            $data = $pdh->query("select * from baihat where maBaiHat='$id'");
            $nhac = $data->fetch()
            ?>
            <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                <div class="song-thumbnail">
                    <img src="img/hinhcasi/<?php echo $nhac['Hinhcasi'] ?>" alt="">
                </div>
                <div class="song-play-area">
                    <div class="song-name">
                        <p><?php echo $nhac['tenBaiHat'] ?>
                    </div>
                    <audio id="audio" preload="none" tabindex="0">

                        <source src="audio/nhac/<?php echo $nhac['path'] ?>">
                    </audio>
                </div>
            </div>

        </div>
    </div>

</div>