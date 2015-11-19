<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-pencil"></i> Edit Kategori</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<?php
$id = $_GET['id'];
$q = mysql_query("SELECT * FROM `cat` WHERE `id_cat`='" . $id . "'") or die(mysql_error());
$fetch = mysql_fetch_array($q);
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Kategori
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form method="POST" action="">
                    <div class="form-group">
                        <label class="control-label">Nama Barang</label>
                        <input type="text" class="form-control" value="<?php echo $fetch[1]; ?>" name="nm" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label"></label>
                        <button type="submit" name="simpan_edit" class="btn btn-warning pull-left">Edit</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['simpan_edit'])) {
                    $nm = $_POST['nm'];
                    $edit = mysql_query("UPDATE `cat` SET `nm`='" . $nm . "' WHERE `id_cat`='" . $id . "'") or die(mysql_error());
                    if ($edit) {
                        header("location:?page=daftar-kategori");
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
