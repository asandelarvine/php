<?php
        if(isset ($_GET['submit'])){
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operation = $_GET['operation'];

            switch($operation){
                case "Add":
                echo $result1 + $result2;
                break;
                case "Subtract":
                echo $result1 - $result2;
                break;
                case "Multiply":
                echo $result1 * $result2;
                break;
                case "Divide":
                echo $result1 / $result2;
                break;
                case "Reminder":
                echo $result1 % $result2;
                break;
                default:
                echo "tiga wana weee!!!"; 

            }
        }
    ?>