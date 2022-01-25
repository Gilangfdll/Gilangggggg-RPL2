<html>
    <center>
<head><title>Seorang Anak Sedang Browsing</title></head>
<h1>Anak Itu Sedang Mencari Rumus Rumus Matematik</h1>
<h3> RUMUS YANG DICARI TENTANG LUAS DAN KELILING BANGUN DATAR </h3>
<body>
<form actiton="" method="post">
<table border=0>
<tr>
    <td>Rumus Segitiga
    <td>:
    <td><input type="text" name="tinggi"><br>
</tr>
<tr>
    <td>Rumus luas Segitiga
    <td>:
    <td><input type="text" name="sisi"><br>
</tr>
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
$tinggi=$_POST["tinggi"];
$sisi=$_POST["sisi"];
$luas= $tinggi*$sisi;
echo "Tinggi Segitiga Adalah : $tinggi <br>";
echo "Luas Segitiga Adalah : $sisi <br>";
echo "Rumus : 0.5 * $tinggi * $sisi <br>";
echo "Hasil : $luas";
}

?>
</center>