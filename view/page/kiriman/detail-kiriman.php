<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-arrow-right"></i> Detail Kiriman</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<?php
$id = $_GET['id'];
$email = $_GET['email'];
//akun
$akun = mysql_query("SELECT `nm`,`email`,`foto` FROM `user` WHERE `email`='" . $email . "'") or die(mysql_error());
$fAkun = mysql_fetch_array($akun);

//informasi
$info = mysql_query("SELECT * FROM `kiriman` WHERE `id`='" . $id . "'") or die(mysql_error());
$fInfo = mysql_fetch_array($info);
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Detail Kiriman
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <ul id="myTabs" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#info" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Informasi</a></li>
                    <li role="presentation"><a href="#maps" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Lokasi</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="info" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        Informasi User
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group form-inline">
                                            <img src="img/akun/<?php echo $fAkun[2]; ?>" class="img img-responsive" width="100px">
                                        </div>
                                        <div class="form-group form-inline">
                                            <label class="control-label">Nama: </label>
                                            <mark><?php echo $fAkun[0]; ?></mark>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label class="control-label">E-Mail :</label>
                                            <mark><?php echo $fAkun[1]; ?></mark>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Informasi data kiriman
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group form-inline">
                                            <img src="img/kiriman/<?php echo $fInfo[2]; ?>" class="img img-responsive">
                                        </div>
                                        <?php
                                        $cat = mysql_query("SELECT `nm` FROM `cat` WHERE `id_cat`='" . $id . "'") or die(mysql_error());
                                        $fCat = mysql_fetch_array($cat);
                                        ?>
                                        <div class="form-group form-inline">
                                            <label class="control-label">Kategori: </label>
                                            <mark><?php echo $fCat[0]; ?></mark>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label class="control-label">Tanggal Masuk :</label>
                                            <mark><?php echo $fInfo[3]; ?></mark>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label class="control-label">Keterangan:</label>
                                            <mark><?php echo $fInfo[6]; ?></mark>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if ($fInfo[8] == "") {
                                ?>
                                <div class="col-md-12">
                                    <div class="alert alert-warning">
                                        <p>Sampah Belum dibersihkan</p>
                                    </div>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="col-md-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            Informasi Data Bukti
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group form-inline col-md-6 col-lg-offset-3">
                                                <img src="img/kiriman/<?php echo $fInfo[8]; ?>" class="img img-responsive">
                                            </div>
                                            <div class="form-group form-inline col-md-6 col-lg-offset-3">
                                                <label class="control-label">Tanggal Diberishkan: </label>
                                                <mark><?php echo $fInfo[9]; ?></mark>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="maps" aria-labelledby="profile-tab">
                        <markers>
                            <marker name="Pan Africa Market" address="1521 1st Ave, Seattle, WA" lat="47.608940" lng="-122.340141" type="restaurant"/>
                            <marker name="Buddha Thai & Bar" address="2222 2nd Ave, Seattle, WA" lat="47.613590" lng="-122.344391" type="bar"/>
                            <marker name="The Melting Pot" address="14 Mercer St, Seattle, WA" lat="47.624561" lng="-122.356445" type="restaurant"/>
                            <marker name="Ipanema Grill" address="1225 1st Ave, Seattle, WA" lat="47.606365" lng="-122.337654" type="restaurant"/>
                            <marker name="Sake House" address="2230 1st Ave, Seattle, WA" lat="47.612823" lng="-122.345673" type="bar"/>

                            <marker name="Crab Pot" address="1301 Alaskan Way, Seattle, WA" lat="47.605961" lng="-122.340363" type="restaurant"/>
                            <marker name="Mama's Mexican Kitchen" address="2234 2nd Ave, Seattle, WA" lat="47.613976" lng="-122.345467" type="bar"/>
                            <marker name="Wingdome" address="1416 E Olive Way, Seattle, WA" lat="47.617214" lng="-122.326584" type="bar"/>
                            <marker name="Piroshky Piroshky" address="1908 Pike pl, Seattle, WA" lat="47.610126" lng="-122.342834" type="restaurant"/>
                        </markers>   
                    </div>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
