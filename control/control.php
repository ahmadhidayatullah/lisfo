<?php

$page = $_GET['page'];
if ($page == "home") {
    include 'view/page/home.php';

    //page user
} elseif ($page == "daftar-akun") {
    include 'view/page/akun/daftar-akun.php';
} elseif ($page == "daftar-reward") {
    include 'view/page/akun/daftar-reward.php';
} elseif ($page == "cek-reward") {
    include 'view/page/akun/cek-reward.php';
} elseif ($page == "hapus-akun") {
    include 'view/page/akun/hapus-akun.php';

    //page kategori
} elseif ($page == "daftar-kategori") {
    include 'view/page/kategori/daftar-kategori.php';
} elseif ($page == "delete-kategori") {
    include 'view/page/kategori/delete-kategori.php';
} elseif ($page == "tambah-kategori") {
    include 'view/page/kategori/tambah-kategori.php';
} elseif ($page == "edit-kategori") {
    include 'view/page/kategori/edit-kategori.php';
    
    //page kiriman
} elseif ($page == "daftar-kiriman") {
    include 'view/page/kiriman/daftar-kiriman.php';
} elseif ($page == "update-daftar-belum-ditangani") {
    include 'view/page/kiriman/update-daftar-belum-ditangani.php';
} elseif ($page == "detail-kiriman") {
    include 'view/page/kiriman/detail-kiriman.php';
} else {
    include 'view/page/home.php';
}
?>