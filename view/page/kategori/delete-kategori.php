<?php

$id = $_GET['id'];
$q = mysql_query("DELETE FROM `cat` WHERE `id_cat`='" . $id . "'") or die(mysql_error());
if ($id) {
    header("location:?page=daftar-kategori");
}
?>