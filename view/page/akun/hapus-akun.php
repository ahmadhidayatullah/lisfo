<?php

$id = $_GET['id'];
$q = mysql_query("DELETE FROM `user` WHERE `email`='" . $id . "'") or die(mysql_error());
if ($id) {
    header("location:?page=daftar-akun");
}
?>