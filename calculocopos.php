<html>

<body>


    

    <?php

    echo "<b>Uma indústria irá produzir dois tipos de copos com formato cilíndrico: </b> <br>

        Copo azul terá as seguintes medidas: 5 cm de raio da base e 12 cm de altura C <br>
        
        Copo verde: 3 cm de raio da base e 18 cm de altura. <hr>";
        
    $azulraio = 5;
    $azulaltura = 12;
    $verderaio = 3;
    $verdealtura = 18;



    //Fórmula: V = π * r² * h
    // π = 3,14


    $volumeazul = (3.14 * ($azulraio *$azulraio) * $azulaltura);
    
    $volumeverde = (3.14 * ($verderaio *$verderaio) * $verdealtura);

    echo "O copo azul tem volume: 3.14 * (5²) * 12 = $volumeazul ³ <br>";
    echo "O copo verde tem volume: 3.14 * (3³) * 18 = $volumeverde ³ <hr>";


    if ($volumeazul > $volumeverde) {
        
        echo "o copo azul é maior com $volumeazul cm³!";
    }
    else {
        echo "o copo verde é maior com $volumeverde cm³";
    }


    





    ?>

</html>
</body>