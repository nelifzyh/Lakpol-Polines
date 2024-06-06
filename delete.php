<?php
// delete.php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM log WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Redirect kembali ke halaman log.php atau tampilkan pesan sukses
    }
}
?>