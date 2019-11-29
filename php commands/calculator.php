<!-- <!DOCTYPE html> -->
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <form method="GET">
    <h1>CALCULATOR</h1>
    <input type="text" name="num1" placeholder="Enter Num1"/><br>
    <input type="text" name="num2"  placeholder="Enter Num2"/><br><br>

        <select name="operation">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Divide</option>
            <option>Multiply</option>
            <option>Reminder</option>
        
        </select>
        <br>
        <br>
        <input type="submit"  name="submit" value="Calculate" /> 
    </form> 
    <p>The answer is:</p>
    <?php
        // if(isset ($_GET['submit'])){
        //     $result1 = $_GET['num1'];
        //     $result2 = $_GET['num2'];
        //     $operation = $_GET['operation'];

        //     if($operation=="Add"){
        //         echo $result1 + $result2;
        //     }elseif($operation=="Subtract"){
        //         echo $result1 - $result2;  
        //     }elseif($operation=="Divide"){
        //         echo $result1 / $result2;
        //     }elseif($operation=="Reminder"){
        //         echo $result1 % $result2;
        //     }else($operation=="Multiply"){
        //         echo $result1 * $result2;
        //     }
        // }
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
        
</body>
</html>