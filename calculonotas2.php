<html>

<body>


    <!--parte de mandar as notas-->

    <form action="calculonotas2.php" method="get">

        <label for="string">nome:</label>
        <input type="text" id="nomealuno" name="nome" required>

        <br>
        <label for="quantity">nota 1 (1 a 10):</label>
        <input type="number" id="quantity" step="0.5" name="nota1" min="0" max="10" required>

        <br>
        <label for="quantity">nota 2 (1 a 10):</label>
        <input type="number" id="quantity" step="0.5" name="nota2" min="0" max="10" required>

        <br>
        <label for="quantity">nota 3 (1 a 10):</label>
        <input type="number" id="quantity" step="0.5" name="nota3" min="0" max="10" required>

        <br>
        <label for="quantity">nota 4 (1 a 10):</label>
        <input type="number" id="quantity" step="0.5" name="nota4" min="0" max="10" required>
        <br>
        <input type="submit" value="enviar dados">
        <br>
        <hr>
    </form>

    <?php error_reporting(E_ALL ^ E_NOTICE); ?>

    <?php


    $nome = $_GET["nome"];

    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    $nota3 = $_GET["nota3"];
    $nota4 = $_GET["nota4"];




    echo "o nome do aluno é $nome";
    echo "<br>";
    echo "a nota do primeiro bimestre é $nota1";
    echo "<br>";
    echo "a nota do segundo bimestre é $nota2";
    echo "<br>";
    echo "a nota do terceiro bimestre é $nota3";
    echo "<br>";
    echo "a nota do quarto bimestre é $nota4";
    echo "<br>";
    # calculo de notas

    $notafinal = (($nota1 + $nota2 + $nota3 + $nota4) / 4);

    echo "<hr>";

    if ($notafinal > 7) {
        echo "o aluno foi <b> aprovado</b>, sua nota foi <b>$notafinal </b>";
    } elseif ($notafinal >= 5) {
        echo "o aluno está <b> de recuperação</b>, sua nota foi <b>$notafinal </b>";
    } else {
        echo "o aluno foi <b> reprovado</b>, sua nota foi <b>$notafinal </b>";
    }



    ?>

</html>
</body>