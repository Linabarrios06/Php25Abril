<?php include 'includes/header.php';


$nombreCliente="    Lina Barrios Hernandez····";
echo($nombreCliente);

var_dump($nombreCliente);
echo(strlen($nombreCliente));

$texto= trim($nombreCliente);
echo($texto);
echo(strlen($texto));

echo(strtoupper($nombreCliente));

echo(strtolower($nombreCliente));
$correo1="lainavss616@gmail.com";
$correo2="lainavss616@gmail.com";

var_dump(strtolower($correo1)==strtolower($correo2));


$nombreCliente=str_replace('Lina Maria','Felipe Andres',$texto);
echo($nombreCliente);


echo strpos($nombreCliente,'Felipe');


$tipoCliente ="Premium";
echo "<br>";
echo "El Cliente". $nombreCliente. " es ". $tipoCliente;
echo "<br>";
echo "El cliente {$tipoCliente} es {$tipoCliente}";


echo substr($correo1,0,1);


include 'includes/footer.php';