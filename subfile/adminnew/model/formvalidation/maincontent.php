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
                            <form class="form-validate form-horizontal" id="feedback_form" method="post" action="subfunction/create_nhac.php" enctype="multipart/form-data">

                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Mã Bài Hát<span class=""></span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="cname" name="mabh" minlength="5" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Tên Bài Hát<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="cname" name="tenbh" minlength="5" type="text" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">Tên ca sĩ<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="cemail" type="text" name="macasi" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="curl" class="control-label col-lg-2">Mã Album</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="curl" type="text" name="maalbum" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="curl" class="control-label col-lg-2">Mã Loai</label>
                                    <div class="col-lg-10">
                                        <select id='loai' name="maloai">
                                            <option value='' >----</option>
                                            <?php
                                            include "../../connect.php";
                                            $data = $pdh->query("select * from theloai");
                                            $loai = $data->fetchAll();
                                            foreach ($loai as $r) {
                                                echo "<option value='{$r['maloai']}'>{$r['tenTheLoai']}</option>";
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
                                        <textarea class="form-control " id="ccomment" name="loinhac" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Save</button>
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