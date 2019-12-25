<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                    <li><i class="fa fa-table"></i>Table</li>
                    <li><i class="fa fa-th-list"></i>Basic Table</li>
                </ol>
            </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Advanced Table
                    </header>
                    <form action="" method="get">
                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                                <tr>
                                    <th><i class="icon_calendar"></i> Mã Bài hát</th>
                                    <th><i class="icon_profile"></i> Tên bài hát</th>
                                    <th><i class="icon_mail_alt"></i> File Bài hát</th>
                                    <th><i class="icon_pin_alt"></i> Mã Album</th>
                                    <th><i class="icon_mobile"></i> Lời bài hát</th>
                                    <th><i class="icon_mobile"></i> Tên ca sĩ</th>
                                    <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                                <?php
                                include "../../connect.php";
                                function mysubstr($str, $limit = 100)
                                {
                                    if (strlen($str) <= $limit) return $str;
                                    return mb_substr($str, 0, $limit - 3, 'UTF-8') . '...';
                                }
                                $data = $pdh->query("select * from baihat join casi on baihat.maCaSi=casi.maCaSi");
                                $nhac = $data->fetchAll(PDO::FETCH_OBJ);
                                foreach ($nhac as $key => $r) {
                                    ?>
                                    <tr>
                                        <td><?php echo $r->maBaiHat ?></td>
                                        <td><?php echo $r->tenBaiHat ?></td>
                                        <td><?php echo $r->path?></td>
                                        <td><?php echo $r->maAlbum ?></td>
                                        <td><?php echo mysubstr($r->loinhac, 40) ?></td>
                                        <td><?php echo $r->tenCaSi ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-primary" href="form_validation.php"><i class="icon_plus_alt2"></i></a>
                                                <a class="btn btn-success" href="fromsua.php?m=<?php echo $r->maBaiHat?>"><i class="fa fa-pencil"></i></a>
                                                <a class="btn btn-danger" href="subfunction/delete_nhac.php?id=<?php echo $r->maBaiHat ?>"><i class="icon_close_alt2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </form>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section