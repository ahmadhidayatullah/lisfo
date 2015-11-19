<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-list"></i> Daftar Kategori</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Kategori
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Kategori</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $q = mysql_query("SELECT * FROM `cat`") or die(mysql_error());
                            while ($row = mysql_fetch_array($q)) {
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo strtoupper($row[1]); ?></td>
                                    <td>
                                        <a href='#' onclick='myFunction<?php echo $no ?>()' data-toggle='tooltip' data-placement='top' data-original-title='Klik Untuk Menghapus Data Ini' class='btn btn-danger btn-sm'><i class='fa fa-trash-o'></i></a>
                                        <a href='?page=edit-kategori&id=<?php echo $row[0] ?>' class='btn btn-warning btn-sm' data-toggle='tooltip' data-placement='top' data-original-title='Klik Untuk Mengedit Data Ini'><i class='fa fa-pencil-square-o'></i></a>
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
