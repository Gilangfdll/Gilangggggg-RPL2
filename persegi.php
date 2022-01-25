<html>
    <center>
<head><title>Seorang Anak Sedang Browsing</title></head>
<h1>Anak Itu Sedang Mencari Rumus Rumus Matematik</h1>
<h3> RUMUS YANG DICARI TENTANG LUAS DAN KELILING BANGUN DATAR </h3>
<body>
<form actiton="" method="post">
<table border=0>

<tr>
    <td>Masukkan Sisi
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
$sisi=$_POST["sisi"];
$luas= $sisi*$sisi;
echo "Lebar Persegi Panjang Adalah : $sisi <br>";
echo "Rumus : $sisi * $sisi <br>";
echo "Hasil : $luas";
}

?>
</center>