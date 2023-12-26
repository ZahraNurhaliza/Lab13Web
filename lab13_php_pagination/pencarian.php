<?php
$q="";
if (isset($_GET['submit']) && !empty($_GET['q'])) {
    $q = $_GET['q'];
    $sql_where = " Where nama LIKE '{$q}%'";
}
$title = 'Data Barang';
include_once 'config.php.'
$sql = 'SELECT * FROM data_barang';
if (isset($sql_where))
    $sql .= $sql_where;
$result = mysqli_query($conn, $sql);
include_once 'header.php';