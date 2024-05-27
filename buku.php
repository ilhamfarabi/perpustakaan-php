<?php
//2210631170074 - Ilham Arif Farabi
include_once("./koneksi.php");
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
$query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>

<body>
    <h1>Daftar Buku</h1>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>ISBN</td>
            <td>Unit</td>
            <td colspan="2">ACTION</td>
        </tr>
        <?php foreach ($query as $data) { ?>
            <tr>
                <td><?= $data["nama"]; ?></td>
                <td><?= $data["isbn"]; ?></td>
                <td><?= $data["unit"]; ?></td>
                <td><a href="edit-buku.php?id=<?= $data["id"] ?>">Edit</a></td>
                <td><a href="delete-buku.php?id=<?= $data["id"] ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <a href="./index.php">Kembali</a><br>
    <a href="./tambah-buku.php">Tambah daftar buku</a>
</body>

</html>