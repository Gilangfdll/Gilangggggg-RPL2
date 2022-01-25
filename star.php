<?php

	$star=5;
	for($a=1; $a<=$star; $a++){
	for($c=$star; $c>=$a; $c--){
		echo "*";
    }
    echo "<br>";
}

for( $a=10;$a>0;$a--){
    for($a1=10;$a1>$a;$a1--){
        echo"*";
    }
echo"<br>";
}

for( $a=9;$a>0;$a--) {
	for($b=1; $b<=$a; $b++){
		echo "&nbsp ";
	}
	for($c=10;$c>$a;$c--){
		echo "*";
	}
	echo "<br/> ";
}

$star=9;
     for($a=1; $a<=$star; $a++){
          for($i=1; $i<=$a; $i++){
                echo " &nbsp";
           }
           for($c=$star; $c>=$a; $c-=1){
                  echo "*";
           }
          echo "<br>";
     }


?>
