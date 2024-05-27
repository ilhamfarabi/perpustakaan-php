<?php
// if (isset($_GET['submit1'])) {
    $nama = $_POST['nama'];
    echo "penarikan saldo berhasil";
// }

// if (isset($_GET['submit2'])) {
//     $nama = $_GET['nama'];
//     echo "saldo anda bla bla bla";
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        Username:
        <input type="text" name="nama">
        <button type="submit" name="submit1">submit</button>
    </form>
</body>

</html>