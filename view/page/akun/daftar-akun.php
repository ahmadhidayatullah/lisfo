<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-user"></i> Daftar Akun</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Akun
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>E-Mail</th>
                                <th>Foto</th>
                                <th>Tgl Daftar</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $q = mysql_query("SELECT * FROM `user`") or die(mysql_error());
                            while ($row = mysql_fetch_array($q)) {
                                ?>
                                <tr>
                                    <td><?php echo $row[0]; ?></td>
                                    <td><?php echo $row[1]; ?></td>
                                    <td class="center">
                                        <img src="img/akun/<?php echo $row[3]; ?>" class="img img-responsive" width="50px">
                                    </td>
                                    <td><?php echo $row[4]; ?></td>
                                    <td>
                                        <a href='#' onclick='myFunction<?php echo $no ?>()' data-toggle='tooltip' data-placement='top' data-original-title='Klik Untuk Menghapus Data Ini' class='btn btn-danger btn-sm'><i class='fa fa-trash-o'></i></a>
                                    </td>
                            <script>
                                function myFunction<?php echo $no ?>() {
                                    if (confirm('Apakah Ingin Menghapus ?') == true) {
                                        window.location = "?page=hapus-akun&id=<?php echo $row[1]; ?>";
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
