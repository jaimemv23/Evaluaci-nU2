<?php
/*CBTIS 89
  Programa que almacena los precios de 5 productos.
  Jaime Eduardo Miranda Vázquez
  3°A de ProgramaciónT.M.
 */

  $arrayprecios=array(500,400,200,700,100);
  $arrayiva=array(0.16, 0.16, 0.16, 0.16, 0.16);
  $arraysubtotal=array();
  $arraydescuentos=array(0.10, 0.10,0.10,0.10,0.10);
  $arraytotal=array();
  $longitud=count($arrayprecios);

for($i=0; $i<=$longitud; $i++){
	
	$arrayiva[$i]=$arrayprecios[$i]*$arrayiva[$i];
	$arraysubtotal[$i]=$arrayprecios[$i]+$arrayiva[$i];
	$arraydescuentos[$i]=$arraysubtotal[$i]*$arraydescuentos[$i];
	$arraytotal=$arraysubtotal[$i]-$arraydescuentos[$i];
}

  echo "PRECIOS <br>";
 for($i=0; $i<=$longitud; $i++){
 	$arrayprecios[$i];
 	echo "<br>";
 }
 echo "IVA <br>";
 for($i=0; $i<=$longitud; $i++){
 echo $arrayiva[$i];
 echo "<br>";
}
echo "SUBTOTAL <br>";
for($i=0; $i<=$longitud; $i++){
	echo $arraysubtotal[$i];
	echo "<br>";
}
echo "DESCUENTOS <br>";
for($i=0; $i<=$longitud; $i++){
	echo $arraydescuentos[$i];
	echo "<br>";
}
echo "TOTAL <br>";
for($i=0; $i<=$longitud; $i++){
	echo $arraytotal[$i];
	echo "<br>";
}


?>