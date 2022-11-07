<?php
            $l1 = 0;
            $l2 = 0;
            $l3 = 0;

            if(isset($_POST['lado1'], $_POST['lado2'], $_POST['lado3'])){
                $l1 = $_POST['lado1'];
                $l2 = $_POST["lado2"];
                $l3 = $_POST["lado3"];
            }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Triângulo</title>
</head>
<body>
    <main>
        <form name="calculadora" class="container" method="post">
            <div class="title">Triângulo</div>
            <div class="input">
                <label>Lado 1: </label>
                <input required value="" type="text" name="lado1">
            </div>
            <div class="input">
                <label>Lado 2: </label>
                <input required value="" type="text" name="lado2">
            </div>
            <div class="input">
                <label>Lado 3:</label>
                <input required type="text" name="lado3">
            </div>
            <input type="submit" value="Calcular" name="calcular" id="calcular">
            <div class="result">
            <?php
                    if(($l1 + $l2 > $l3) && ($l1 + $l3 >$l2) && ($l2 + $l3 > $l1)){
                        if($l1 == $l2 && $l2 == $l3){
                            echo "</br> <img src='equilatero.png'>";
                        }elseif($l1 == $l2 || $l1 == $l3 || $l2 == $l3){
                            echo "</br> <img src='isosceles.png'>";
                        }else{
                            echo "</br> <img src='escaleno.png'>";
                        }
                    }else{
                        echo "</br> O triângulo não existe!";
                    }
            ?>
        </div>
        </form>
    </main>
</body>
</html>