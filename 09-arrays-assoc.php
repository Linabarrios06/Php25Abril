<?php include 'includes/header.php';

$varios = array('Lunes','Martes',3,7, true);

$animales = array('Cat'=>'Gato','Dog'=>'Perro','Bird'=>'Pajaro');
var_dump($animales);
echo "<br>";
echo($animales['Cat']);
echo "<br>";
echo($varios[3]);



$amigos=array(array('Lina', 19, 'Tecnico En protección de recursos naturales',  '06/05/05', 3012547943),
            array('Kevin',17,'Tecnico de sistemas', '30/06/06', 3224634734),
            array('Catalina', 30, 'Ingeniera civil',  '23/03/05', 3105678965),
            array('Mathew', 18, 'Tecnico de multimedia',  '03/01/06', 3023453738),
            
);
echo "<br>";
echo ('La profesión de '.$amigos[0][0]. ' es: '.$amigos[0][2]);
echo "<br>";
echo('El 1 número de telefono de '.$amigos[3][0]. ' es: '. $amigos[3][3][0] );
echo "<br>";
$cant =count($amigos);
echo('Total de amigos es  : '. $cant);
echo "<br>";
echo ('Nombre del ultimo amigo es: '. $amigos[$cant-1][0]);
echo "<br>";

#Ejercicio

$frase = "Catalina la Gata"; 
$arreglo = str_split($frase); 

echo "<br>";
echo ('Cadena original: ' .$frase );
echo "<br>";
echo ('Arreglo de caracteres: ');
print_r($arreglo);

echo "</div>";


include 'includes/footer.php';