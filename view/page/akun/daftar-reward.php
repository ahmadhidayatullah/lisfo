<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-star"></i> Daftar Reward</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Daftar Reward
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Total Kiriman</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $q = mysql_query("SELECT * FROM `user` WHERE `reward` >= '10'") or die(mysql_error());
                            while ($row = mysql_fetch_array($q)) {
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo strtoupper($row[0]); ?></td>
                                    <td><?php echo strtoupper($row[1]); ?></td>
                                    <td><?php echo $row[5]; ?></td>
                                    <td>
                                        <a href='#' onclick='myFunction<?php echo $no ?>()' data-toggle='tooltip' data-placement='top' data-original-title='Cek Jika Sudah Dikasih Reward' class='btn btn-info btn-sm'><i class='fa fa-check'></i></a>
                                    </td>
                            <script>
                                function myFunction<?php echo $no ?>() {
                                    if (confirm('Cek Jika Sudah Dikasih Reward?') == true) {
                                        window.location = "?page=cek-reward&id=<?php echo $row[1] . "&jml=" . $row[5]; ?>";
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
