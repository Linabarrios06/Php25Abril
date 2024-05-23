<?php include 'includes/header.php';

function serie($n) {
    $series = [];
    // Inicializamos la serie 
    $a = 0;
    $b = 1;
    
    if ($n >= 1) {
        //Se usa array_push para agregar estos números al arreglo $series.
        array_push($series, $a);
    }
    
    if ($n >= 2) {
        array_push($series, $b);
    }
    
    // Generar la serie de Fibonacci
    for ($i = 2; $i < $n; $i++) {
        $next = $a + $b;
        array_push($series, $next);
        $a = $b;
        $b = $next;
    }
    
    return $series;
}

// Solicitar el número al usuario
$numero = (int)readline("Ingresa un número: ");

// Obtener la serie de Fibonacci
$serieFibonacci = serie($numero);

// Imprimir la serie de Fibonacci
echo "La serie de Fibonacci hasta el número $numero es: " . implode(", ", $serieFibonacci) . "\n";
?>


include 'includes/footer.php'; ?>