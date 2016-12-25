<?php
$i="0";
function kalanBul($bu, $buna) {
   global $kalan;
   $kalan = $bu % $buna;
	global $i;
	if ($kalan==1) { echo "btn btn-danger btn-sm"; }
	if ($kalan==2) { echo "btn btn-warning btn-sm"; }
 	if ($kalan==3) { echo "btn btn-success btn-sm"; }
 	if ($kalan==0) { echo "btn btn-primary btn-sm"; }

}

?>

<?php $i++; kalanBul($i,4); ?> //It's changing every type, Her yazılışta 1 den 4 e kadar farklı çıktı verip başa döner.