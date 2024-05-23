<?php include 'includes/header.php';

$productos=[
    [
        'nombre'=>'Tablet',
        'precio'=>500,
        'disponible'=>true
        ],
    [
        'nombre'=>'Televisor Smart Tv',
        'precio'=>1200,
        'disponible'=>false
        ],
    [
        'nombre'=>'Monitor 14',
        'precio'=>350,
        'disponible'=>true
        ],
];

foreach($productos as $producto){
    echo"<pre>";
        var_dump($producto);
    echo"</pre>";
}

foreach($productos as $producto){?>
<li>
        <p> Producto: <?php echo $producto ['nombre'];?></p>
        <p> Precio: <?php echo '$' . $producto ['precio'];?></p>
        <?php
            if($producto['disponible']){
                echo"<p> Disponible <p/>";
            }
            else{
                echo"<p> No Disponnible <p/>";
            }
        ?>

    </li>

    <?php
}

// Utilizando operador terniario
foreach($productos as $producto){?>
    <li>
            <p> Producto: <?php echo $producto ['nombre'];?></p>
            <p> Precio: <?php echo '$' . $producto ['precio'];?></p>
            <p><?php echo ($producto['Disponible'])? 'Diponible': 'No Disponible' ?> </p>
            
    </li>
    
        <?php
    }

include 'includes/footer.php'; ?>