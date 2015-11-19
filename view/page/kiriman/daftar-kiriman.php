<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-list-ul"></i> Daftar Kiriman</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Kiriman
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>E-mail</th>
                                <th>Tgl Masuk</th>
                                <th>Ket</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $q = mysql_query("SELECT * FROM `kiriman`") or die(mysql_error());
                            while ($row = mysql_fetch_array($q)) {
                                //kategori
                                $cat = mysql_query("SELECT `nm` FROM `cat` WHERE `id_cat`='" . $row[1] . "'") or die(mysql_error());
                                $fetch = mysql_fetch_array($cat);

                                //akun
                                $akun = mysql_query("SELECT `nm`,`email` FROM `user` WHERE `email`='" . $row[10] . "'") or die(mysql_error());
                                $fAkun = mysql_fetch_array($akun);
                                if ($row[7] == 0) {
                                    $color = "alert alert-warning";
                                    $text = "Belum Bersih";
                                } else {
                                    $color = "alert alert-success";
                                    $text = "Sudah Bersih";
                                }
                                ?>
                                <tr class="<?php echo $color; ?>">
                                    <td><?php echo $fetch[0]; ?></td>
                                    <td><?php echo $fAkun[0]; ?></td>
                                    <td><?php echo $fAkun[1]; ?></td>
                                    <td><?php echo $row[3]; ?></td>
                                    <td><?php echo substr($row[6], 0, 20) . "..."; ?></td>
                                    <td><?php echo $text; ?></td>
                                    <td>
                                        <!--<a href='?page=update-daftar-belum-ditangani&id=<?php //echo $row[0]      ?>' class='btn btn-success btn-sm' data-toggle='tooltip' data-placement='top' data-original-title='Klik Untuk Update Data Ini'><i class='fa fa-check'></i></a>-->
                                        <a href='?page=detail-kiriman&id=<?php echo $row[0] . "&email=" . $row[10]; ?>' class='btn btn-success btn-sm' data-toggle='tooltip' data-placement='top' data-original-title='Klik Untuk Melihat Detail Data Ini'><i class='fa fa-expand'></i></a>
                                        <a href='#' onclick='myFunction<?php echo $no ?>()' data-toggle='tooltip' data-placement='top' data-original-title='Klik Untuk Menghapus Data Ini' class='btn btn-danger btn-sm'><i class='fa fa-trash-o'></i></a>
                                    </td>
                            <script>
                                function myFunction<?php echo $no ?>() {
                                    if (confirm('Apakah Ingin Menghapus ?') == true) {
                                        window.location = "?page=delete-kategori&id=<?php echo $row[0]; ?>";
                                    }
                                }
                            </script>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
