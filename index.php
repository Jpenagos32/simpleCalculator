<?php
    /* Desarrollador: Julian Andres Penagos
       Programa de formacion: Desarrollo web con PHP
       Evidencia: Taller "Uso de funciones"
    */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidencia_3_Actividad_3</title>
    <link rel="shortcut icon" href="https://i.postimg.cc/R0W4BNB9/calculator-pngrepo-com.png">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Estructura de formulario -->
    
    <form method="POST" action="index.php" class="formulario">
            
        <label for="numero1">Ingresar Primer Número</label>
        <input type="number" name="numero1" id="numero1">

        <select class="operacion" name="operacion">
            <option value="s">Sumar</option>
            <option value="r">Restar</option>
            <option value="m">Multiplicar</option>
            <option value="d">Dividir</option>
        </select>

        <label for="Numero2">Ingresar Segundo Número</label>
        <input class="numero2" type="number" name="numero2" id="Numero2">

        <input class="btn" type="submit" name="calcular" value="calcular">
        <input class="btn" type="reset">    
        <div class="resultado">
            <?php
                include("biblioteca.php");
                if (isset($_REQUEST["calcular"])) {
                    $n1 = $_REQUEST["numero1"];
                    $n2 = $_REQUEST["numero2"];
                    $op = $_REQUEST["operacion"];

                    switch ($op) {
                        case 's':
                            echo Operacion_M :: sumar($n1,$n2);
                            break;
                        case 'r':
                            echo Operacion_M :: restar($n1,$n2);
                            break;
                        case 'm':
                            echo Operacion_M :: multiplicar($n1,$n2);
                            break;
                        case 'd':
                            echo Operacion_M :: dividir($n1,$n2);
                            break;
                        
                        default:
                            echo "Esta opcion no existe";
                            break;
                    }
                }
            ?>
        </div>
    </form>      
    
</body>
</html>