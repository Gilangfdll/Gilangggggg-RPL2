<html>
    <center>
<head><title>Seorang Anak Sedang Browsing</title></head>
<h1>Anak Itu Sedang Mencari Rumus Rumus Matematik</h1>
<h3> RUMUS YANG DICARI TENTANG LUAS DAN KELILING BANGUN DATAR </h3>
<body>
<form actiton="" method="post">
<table border=0>
<tr>
    <td>Luas Trapesim
    <td>:
    <td><input type="text" name="sisi"><br>
</tr>
<tr>
    <td>Rumus Trapesium
    <td>:
    <td><input type="text" name="sisi2"><br>
</tr>
    <td>Tinggi Yang Sejajar Dengan Alas
    <td>:
    <td><input type="text" name="tinggi"><br>
<tr>
    <td><input type="submit" name="input-data" value=Input>
               
</tr>
</table>
</form>
</body>
</html>

<h5> Hasil Anak Membuat Sebuah Rumus Yang Dicari </h5>
<?php
if (isset ($_POST["input-data"]))
{
$sisi=$_POST["sisi"];
$sisi2=$_POST["sisi2"];
$tinggi=$_POST["tinggi"];
$luas= $sisi*$sisi2*$tinggi;
echo "Sisi Belah Ketupat Adalah : $sisi <br>";
echo "Sisi2 Belah Ketupat Adalah : $sisi2 <br>";
echo "tinggi Belah Ketupat Adalah : $tinggi<br>";
echo "Rumus : $sisi * $sisi2 * $tinggi <br>";
echo "Hasil : $luas";
}

?>
</center>