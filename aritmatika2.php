<html>
    <head><title>Pengolahan Form</title></head>

    <body>
        <FORM action="" method="post" name="input">
        <table>
            <tr>
                <td>Masukan nama</td>
                <td><input type="number" nama="nama" required></td>
            </tr>
        </table>
            <input type="submit" name="Input" value="Input">
        </FORM>
    </body>
</html>

<?php

if (isset($_POST['Input'])){
    $nama = $_POST['nama'];
    echo "Nama Anda : <b>$nama</b>";
}

?>