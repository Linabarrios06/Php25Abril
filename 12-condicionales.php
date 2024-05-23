<?php include 'includes/header.php';

// Condicionales if, else if y switch
$autenticado = true;

if($autenticado) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesión";
}

//Operador Or ||
$autenticado = false;
$admin = false;

if($autenticado || $admin) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesión";
}

//Operador AND  &&
$autenticado = true;
$admin = false;

if($autenticado && $admin) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesión";
}

//if anidados...
$cliente = [
    'nombre ' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

echo "<br>";

if( !empty($cliente)) {
    echo "El arreglo de cliente no esta vacio";
    
    if($cliente['saldo'] > 0) {
        echo "El cliente tiene saldo disponible";
    } else {
        echo "No hay saldo";
    }
}

// else if
if($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if ($cliente['infomacion']['tipo'] === 'premium') {
} else {
    echo "No hay cliente definido o no tiene saldo o no es premium";
}

// Switch

$tecnologia = 'PHP';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje!";
        break;

    default:
        echo "Algun lenguaje que no se cual es";
        break;
}

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje!";
        break;
    case 'JavaScript':
        echo "Genial, el lenguaje de la web";
        break;
    case 'HTML':
        echo 'Emmm...';
        break;
    default:
        echo "Algun lenguaje que no se cual es";
        break;
}


include 'includes/footer.php';