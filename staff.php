<?php
//2210631170074 - Ilham Arif Farabi
include_once("./koneksi.php");
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
$query = mysqli_query($db, "SELECT * FROM staff");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>
</head>

<body>
    <h1>Daftar Staff</h1>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Telpon</td>
            <td>Email</td>
            <td colspan="2">ACTION</td>
        </tr>
        <?php foreach ($query as $data) { ?>
            <tr>
                <td><?= $data["nama"]; ?></td>
                <td><?= $data["telp"]; ?></td>
                <td><?= $data["email"]; ?></td>
                <td><a href="edit-staff.php?id=<?= $data["id"] ?>">Edit</a></td>
                <td><a href="delete-staff.php?id=<?= $data["id"] ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <a href="./index.php">Kembali</a><br>
    <a href="./tambah-staff.php">Tambah daftar staff</a>
</body>

</html>