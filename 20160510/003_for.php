<?php

/*改行*/
$br = "<br />";

for( $i=0;;$i++ ){

  echo $i . $br;

  if( $i===10 ){

    echo "ループ抜けるよ";

    break;

  }

}


?>
