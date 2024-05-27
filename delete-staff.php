<?php
//2210631170074 - Ilham Arif Farabi
include_once("./koneksi.php");
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
$id = $_GET["id"];
$query = mysqli_query($db, "DELETE FROM staff WHERE id=$id");
header("Location: staff.php");
