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
                    <h2>Data Member Gea</h2>
                    <h5>Prodi Bisnis Digital ITK</h5>
                    <table class="table">
                        <tr>
                            <th>Tanggal Member</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                        </tr>
                        <tr>
                            <td>03 April 2022</td>
                            <td>Jessica</td>
                            <td>Balikpapan</td> 
                        </tr>
                        <tr>
                            <td>26 Mei 2023</td>
                            <td>Detta</td>
                            <td>Jakarta</td>
                        </tr>
                        <tr>
                            <td>06 Desember 2023</td>
                            <td>Kezia</td>
                            <td>Bandung</td>
                        </tr>
                        <tr>
                            <td>19 Maret 2024</td>
                            <td>Naufal</td>
                            <td>Paser</td>
                        </tr>
                        <tr>
                            <td>20 Januari 2024</td>
                            <td>Dwi</td>
                            <td>Bogor</td>
                        </tr>
                    </table>
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