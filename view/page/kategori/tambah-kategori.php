<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-plus"></i> Tambah Kategori</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Kategori
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form method="POST" action="">
                    <div class="form-group">
                        <label class="control-label">Nama Barang</label>
                        <input type="text" class="form-control" name="nm" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label"></label>
                        <button type="submit" name="simpan_kat" class="btn btn-success pull-left">Simpan</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['simpan_kat'])) {
                    $nm = $_POST['nm'];
                    $q = mysql_query("INSERT INTO `cat` VALUES('','" . $nm . "')") or die(mysql_error());
                    if ($q) {
                        echo "<div class='alert alert-success'>Berhasil Simpan Data</div>";
                    }
                }
                ?>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
