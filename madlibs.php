<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs</title>
</head>
<body>
    <br>
    <h1> Mad Libs </h1>

    <form action="madlibs.php" method="get">
        Color : <input type="text" name="color" placeholder="Color"> 
        <br><br>
        Plural Noun : <input type="text" name="noun" placeholder="Noun">
        <br><br>
        Celebrity: <input type="text" name="celebrity" placeholder="Celebrity">
        <input type="submit">
    </form>
    <br><br>
    <?php 

        // $madlib = "";

        if($_SERVER["REQUEST_METHOD"] == "GET"){

            $color = $_GET["color"];
            $noun = $_GET["noun"];
            $celebrity = $_GET["celebrity"];

            echo "Roses are $color <br>";
            echo "$noun are blue <br>";
            echo "I Love $celebrity <br>";

            // $madlib = "Roses are $color,
            //     $noun are blue,
            //     I Love $celebrity.";

            // echo $madlib;

        }
        // echo $madlib;
    ?>

</body>
</html>