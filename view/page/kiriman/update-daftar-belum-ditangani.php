<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-refresh"></i> Perbaharui Data</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Perbaharui Data
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form method="POST" action="">
                    <div class="form-group col-lg-6 col-lg-offset-3">
                        <label class="control-label">Bukti Foto, Sampah Yang Dibersihkan</label>
                        <input type="file" class="form-control" name="bukti" required>
                        <em>* Foto harus berbentuk jpg atau png (maks 400kb)</em>
                    </div>
                    <div class="form-group col-lg-6 col-lg-offset-3">
                        <label class="control-label">Tanggal Dibersihkan</label>
                        <div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2">
                            <input class="form-control" name="tgl" size="5" type="text">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-remove fa fa-trash-o"></i></span>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-th fa fa-bars"></i></span>
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-lg-offset-3">
                        <label class="control-label"></label>
                        <button type="submit" name="perbaharui" class="btn btn-success pull-right"><i class="fa fa-refresh"></i> Perbaharui</button>
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
