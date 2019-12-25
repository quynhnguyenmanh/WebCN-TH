<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-files-o"></i> Form Validation</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                    <li><i class="icon_document_alt"></i>Forms</li>
                    <li><i class="fa fa-files-o"></i>Form Validation</li>
                </ol>
            </div>
        </div>
        <!-- Form validations -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Form validations
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <?php
                             include "../../connect.php";
                            $id = $_GET['m'];
                            $data = $pdh->prepare("select * from baihat join casi on baihat.maCaSi=casi.maCaSi where maBaiHat= ?");
                            $data->execute(array($id));
                            $nhac = $data->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <form class="form-validate form-horizontal" id="feedback_form" method="post" action="subfunction/edit_nhac.php" enctype="multipart/form-data">

                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Mã Bài Hát<span class=""></span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="cname" name="mabh" type="text" value="<?php echo $nhac['maBaiHat'] ?>"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Tên Bài Hát<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="cname" name="tenbh" minlength="5" type="text" required  value="<?php echo $nhac['tenBaiHat']?>"   />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">Tên ca sĩ<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="cemail" type="text" name="macasi" value="<?php echo $nhac['tenCaSi']?>"  required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="curl" class="control-label col-lg-2">Mã Album</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="curl" type="text" name="maalbum" value="<?php echo $nhac['maAlbum']?>"  />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="curl" class="control-label col-lg-2">Mã Loai</label>
                                    <div class="col-lg-10">
                                    <select id='loai' name="maloai">
                                        <!-- <input class="form-control " id="curl" type="text" name="maloai" value="<?php echo $nhac['maloai']?>"  /> -->
                                            <?php
                                            include "../../../../connect.php";
                                            $t='';
                                            $data = $pdh->query("select * from theloai");
                                            $loai = $data->fetchAll();
                                            foreach($loai as $k=>$v)
                                            {
                                                if($loai[$k][0]==$nhac['maloai'])
                                                        echo "<option value='{$loai[$k][0]}' selected>{$loai[$k][1]}</option>";
                                                    else
                                                        echo "<option value='{$loai[$k][0]}'>{$loai[$k][1]}</option>";
                                            }
                                            ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="" class="control-label col-lg-2">File Music</label>
                                    <input type="file" id="exampleInputFile" name="filenhac">
                                    
                                    <div class="col-lg-10">

                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="ccomment" class="control-label col-lg-2">Lời Nhạc</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control " id="ccomment" name="loinhac"  required><?php echo $nhac['loinhac']?>"</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Edit</button>
                                        <button class="btn btn-default" type="button">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </section>
            </div>
        </div>

        <!-- page end-->
    </section>
</section>