<div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                        <a href="#" data-filter="*">Browse All</a>
                        <form action="./subfile/albums/timkiem.php" method="get" enctype="multipart/form-data" style="font-size: 20px">
                    Tìm kiếm: <input id="tbh" type="text" name="search" style="border-radius:7px;width:600px"/>
                   <button value="search" style="background-color: black;border:0px;border-radius:4px;width:30px"><i class="fa fa-search" aria-hidden="true" style="font-size:20px;color:aliceblue"></i></button>
                </form>
                    </div>
                </div>
            </div>

            <div class="row oneMusic-albums">
            <?php
               include "connect.php";
                $data = $pdh->query("select * from baihat join casi on baihat.maCaSi=casi.maCaSi limit 0,18");
                $nhac = $data->fetchAll();
                foreach ($nhac as $key => $r) { ?>
                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t c p">
                    <div class="single-album" style="width:150px;height:250px">
                        <img src="img/hinhcasi/<?php echo $r["Hinhcasi"] ?>" alt="">
                        <div class="album-info">
                        <a href="trangbaihat.php?id=<?php echo $r['maBaiHat'] ?>">
                                <h5><?php echo $r['tenBaiHat'] ?></h5>
                            </a>
                            <p><?php echo $r['tenCaSi'] ?></p>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>