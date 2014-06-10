<?php
 $pago = require 'pago.php';
 print_r($pago);
 
 $sueldo = $pago['Sueldo'];
 $iva = $sueldo * 0.15;
 $isr = $sueldo * 0.10;
 $sueldo = $sueldo-($iva+$isr);
 
 
 echo "\n El iva es: $iva";
 echo "\n El isr es: $isr";
 echo "\n\n Total a pagar: $sueldo\n";
 
 
 