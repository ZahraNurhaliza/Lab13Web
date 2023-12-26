# Lab13Web

## Langkah - langkah Parktikum

### *Lakukan perubahan di file:home.php.*
```php
include("../class/config.php");
$sql = 'SELECT * FROM data_barang ';
$sql_count = "SELECT COUNT(*) FROM data_barang";
if (isset($sql_where)) {
    $sql .= $sql_where;
    $sql_count .= $sql_where;
}
$result_count = mysqli_query($conn, $sql_count);
$count = 0;
if ($result_count) {
    $r_data = mysqli_fetch_row($result_count);
    $count = $r_data[0];
}
$per_page = 1;
$num_page = ceil ($count / $per_page);
$limit = $per_page;
if(isset($_GET['page'])) {
    $page = $_GET['page'];
    $offset = ($page - 1) * $per_page;
} else {
    $offset = 0;
    $page = 1;
}
$sql .= "LIMIT {$offset},{$limit}";
$result = mysqli_query($conn, $sql);
include_once '../module/home.php';
```

## *Hasil OUTPUT*

<img width="854" alt="ss 1" src="https://github.com/ZahraNurhaliza/Lab13Web/assets/115614417/c1f565f8-e472-4195-9d65-d4464ff5189f">

## SELESAI
