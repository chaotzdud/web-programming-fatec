<?php
    if (isset($_POST["number1"]) && isset($_POST["number2"])) {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        
        // Verificando se os valores são numéricos
        if (is_numeric($number1) && is_numeric($number2)) {
            $result = $number1 + $number2;
            echo "$number1 + $number2 = $result";
        } else {
            echo "Please enter valid numbers!";
        }
    } else {
        echo "Please enter both numbers!";
    }
?>
