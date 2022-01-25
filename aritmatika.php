<html>
    <head><title>Aritmatika</title></head>

    <body>
        <hr>
        <FORM action="" method="post" name="input">
        <table>
            <tr>
                <td>Pilih ingin menggunakan perhitungan mana :</td>
                <td><select name="operasi" >
                    <option value="">pertambahan</option>
                    <option value="">Pengurangan</option>
                    <option value="">Perkalian</option>
                    <option value="">Modelus</option>
                    <option value="">Pembagian</option>
                    <option value="">Pangkat</option>
                </select></td>
            </tr>
            <tr>
                <td>Masukan Bilangan A :</td>
                <td><input type="number" nama="A" required></td>
            </tr>
            <tr>
                <td>Masukan Bilangan B :</td>
                <td><input type="number" nama="B" required></td>
            </tr>
        </table>
            <input type="submit" name="Input" value="Input">
<hr>
        </FORM>
    </body>
</html>

<?php


if (isset($_POST['Input'])){

    $a = $_POST['A'];
    $b = $_POST['B'];
    $operasi = $_POST['operasi'];

    //penjumalahan
    if($operasi == "pertambahan"){
        $c = $a + $b;
        echo "Hasilnya yaitu : $c";
    }
}

?>
