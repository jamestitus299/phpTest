<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <br>
    <h1> Calculator </h1>

    <form action="Calculator.php" method="get">
        Number 1 : <input type="number" step="0.001" name="num1"> 
        <br><br>
        Number 2 : <input type="number" step="0.001" name="num2">
        <br><br>
        Operation (+,-,*,/) : <input type="text" name="opr">
        <input type="submit">
    </form>
    <br><br>
    Answer : <?php 
        $a = $_GET["num1"] ; $b = $_GET["num2"]; $op = $_GET["opr"];
        $ans = 0;
        
        if($op == "+"){
            $ans = $a + $b;
        }else if($op == "-"){
            $ans = $a - $b;
        }elseif($op == "*"){
            $ans = $a * $b;
        }else if($op == "/"){
            $ans = $a / $b;
        }else{
            $ans = "Wrong input";
        }
        
        echo $ans;
        ?>

</body>
</html>