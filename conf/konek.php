<?php

$conn = mysql_connect("localhost", "root", "") or die(mysql_error());
$sel = mysql_select_db("lisfo");
if (!$conn) {
    echo "Lost Connection!";
}
?>