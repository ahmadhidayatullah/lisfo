<?php

$id = $_GET['id'];
$jml = $_GET['jml'];
$cek = mysql_query("SELECT `reward` FROM `user` WHERE `email`='" . $id . "'") or die(mysql_error());
$fCek = mysql_fetch_array($cek);
$hasil = $fCek[0] - 10;
$q = mysql_query("UPDATE `user` SET `reward`='" . $hasil . "' WHERE `email`='" . $id . "' ") or die(mysql_error());
if ($id) {
    header("location:?page=daftar-reward");
}
?>