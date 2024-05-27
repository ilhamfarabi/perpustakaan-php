<?php
//2210631170074 - Ilham Arif Farabi
session_start();

include_once("./koneksi.php");


if (isset($_POST['email']) && isset($_POST['password'])) {
    $emailnya = $_POST['email'];
    $passwordnya = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql_query = "SELECT * FROM users WHERE email='$emailnya'";
    $result = mysqli_query($db, $sql_query);

    if (mysqli_num_rows($result) > 0) {
        echo "Maaf email telah terdaftar";
    } else {
        $sql_query = "INSERT INTO users (email, password) VALUES ('$emailnya', '$passwordnya')";

        if (mysqli_query($db, $sql_query)) {
            echo "Registrasi berhasil, silahkan <a href='login.php'> Login </a>";
        } else {
            echo "Registrasi gagal";
        }
    }
}