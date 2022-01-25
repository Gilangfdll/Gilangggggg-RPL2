<?php
if (isset($_POST['Input'])) {
    $nami = $_POST['nama'];
    echo "Nama Anda : <b>$nami</b>";
    $operasi = $_POST['operasi'];
}
?>
?>


<html>
    <head><title>Pemesanan Tiket Online</title></head>
    <body align="center">
        <table border="1">
            <tr>
                <th colspan="3">Pemesanan Tiket Online</th>
            </tr>
            <tr>
                <td colspan="3">&nbsp&nbsp&nbsp&nbsp Promo untuk Keberangkatan 20 Juli 2021 !!&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            </tr>
            <tr>
                <td>DEPART</td>
                <td> : </td>
                <td><select name="operasi">
                    <option value="">--PILIH--</option>
                    <option value="tambah">JAKARTA(CKG)</option>
				    <option value="kurang">SEMARANG(SRG)</option>
				    <option value="kali">PALEMBANG(PLM)</option>
			</select></td>
            </tr>
            <tr>
                <td>RETURN</td>
                <td> : </td>
                <td><select name="operasi">
                    <option value="">--PILIH--</option>
                    <option value="">SINGAPORE(SIN)</option>
				    <option value="">KUALA LUMPUR(KUL)</option>
				    <option value="">SINGAPORE(SIN)</option>
                    <option value="">KUALA LUMPUR(KUL)</option>
                    <option value="">SINGAPORE(SIN)</option>
                    <option value="">KUALA LUMPUR(KUL)</option>
			</select></td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td> : </td>
                <td>Pilih</td>
            </tr>
        </table>
    </body>
</html>