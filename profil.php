<!DOCTYPE html>
<html>
    <head>
        <title>Profil Website Layout</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            include ('header.php');
            include ('menu.php');
        ?>
        <div class="row">
            <div class="leftcolumn">
                <div class="card">
                    <h2>Profil Website</h2>
                    <h5>Balikpapan, 26 Oktober 2024</h5>
                    <div class="fakeimg" style="height:500px;">
                        <img src="download.jpg" style="height:400px;"></div>
                    <p>deskripsi tentang profil website</p>
                </div>
            </div>
            <?php
                include ('konten_kanan.php');
            ?>
        </div>
        <?php
            include ('footer.php');
        ?>
    </body>
</html>