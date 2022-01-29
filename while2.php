<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While 2</title>
</head>
<body>
    <form mehtod="POST" action="">
    <table>
            <tr>
            <td><h4><i>Masukkan Jumlah Bintang :</i></h4></td>
            <td><h4><input type="text" name="bintang"></h4></td>
            <td><h4><input type="submit" value="Proses"></h4></td>
            </tr>
        </table> 
    </form>

<h4 style="margin-top:-20px; margin-left: 5px">
    <?php
    $v = $_POST['bintang'];
    $i = 1;
    while ($i <= $v){
        $s = 1;
        while ($s <= $i){
            echo "&nbsp";
            $s++;
        }
        $a = $v;
        while ($a >= $i){
            echo $v-$a+1;
            $a--;
        }
        $i++;
        echo "<br>";
    }
    ?>
</h4>
</body>
</html>