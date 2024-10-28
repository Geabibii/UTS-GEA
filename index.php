<!DOCTYPE html> 
<html>
<head>
    <title>Desain Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
include('header.php');
include('menu.php');
?>

<div class="row">
    <div class="leftcolumn">
        <div class="card">
            <h2>Selamat Datang GEA</h2>
            <p>Silahkan pilih menu untuk mengakses halaman web.</p>
            <div class="fakeimg" style="height:500px;">
                <img src="fashion.jpg" style="height:400px;"></div>
            <p>deskripsi gambar nya</p>
        </div>
    </div>

    <?php
    include('konten_kanan.php');
    ?>
</div>

<?php
include('footer.php');
?>

</body>
</html>