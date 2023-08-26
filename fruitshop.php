<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Shop</title>
</head>
<body>
    <br>
    <h1> Fruit Shop </h1>

    <form action="fruitshop.php" method="post">
        Apple <input type="checkbox" name="fruits[]" value="Apple"> <br>
        Orange <input type="checkbox" name="fruits[]" value="Orange"> <br>
        Grapes <input type="checkbox" name="fruits[]" value="Grapes"> <br>
        <input type="submit">
    </form>
    <br><br>
    <?php 

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $fruits = $_POST["fruits"];
            echo $fruits[0];

        }
    ?>

</body>
</html>