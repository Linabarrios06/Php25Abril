<?php include 'includes/header.php';
$carrito =[];
$carrito =['Uno','Dos','Tres'];

$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');

echo "<pre>";
echo ($semana[0]. "<br>");
echo ($semana[1]. "<br>");
echo ($semana[2]. "<br>");
echo ($semana[3]. "<br>");
echo ($semana[4]. "<br>");
echo ($semana[5]. "<br>");
echo ($semana[6]. "<br>");

echo "</pre>";


$carrito[0] = 'Four';
echo "<pre>";
var_dump($carrito);
echo "</pre>";

array_push($carrito, 'Five');
echo "<pre>";
var_dump($carrito);
echo "</pre>";

array_unshift($carrito, 'Numbers');
echo"<pre>";
var_dump($carrito);
echo"</pre>";


foreach ($carrito as $elemento){
    echo ('<li>'. $elemento. '</li>');
}

include 'includes/footer.php';