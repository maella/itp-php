<?php
echo 'Hola Mundo';

/** 
* Comentario de varias lineas
-*/
$message= 'Hola Mundo'; // Comentario de línea

# El punto y coma se puede omitir al final de una bloque 

ECHO "$message\n";

define ('PUBLISHER', 'Springer');

echo PUBLISHER;

$pi =0.314E2;

echo "\n$pi\n";
echo'\n$pi';

$people = ['Luis', 'Misarain', 'Noe', 1234,false, [2]];

$old = array (2,3,4);

$product = [
'name' => 'Ajax',
'price' => 230,
'available' => true, 
];

foreach($product as $field => $value) { // recorre un arreglo
	echo "\n$field: $value";
}
	

echo"\nEste es el precio del producto {$product['price']}\n";
echo $producto['name'];

print_r ($product);
print_r ($old);
print_r ($people);

//Variables variables
$foo ='bar';
$$foo = 'baz';

echo "\n$foo";
echo "\$bar";

$bigVariable ='PHP';
$short = &$bigVariable;
$bigVariable = 'Rocks!';
echo "Short is $short";
echo "Long is $bigVariable";

function update_counter()
{
global $counter;
$counter++;
}

$counter =10;
update_counter();
echo $counter;

/*
 Clase del 10 de junio de 2014

*/
// uso del case 
$color ='red';
switch ($color) {
case 'green': 
	echo 'Green';
	break;
case 'blue': 
	echo 'Blue';
	break;
default;
	echo $color;
}


// uso de funciones con retorno de valor

function test()
{
  $parameter1 = 'foo';
  $parameter2 = 'bar';
  if ($parameter1=== 'baz'){
  die('Terminate script');
  }
  return "\n$parameter1  $parameter2";
}
 // return 'Luis';
  echo test();
 // exit(0);
 
 
 //Llamada a un archivo externo con retorno de valores
 
 $configuration = require 'configuration.php';
 print_r($configuration);
 
  
	
	
	
	
