<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Test</title>
</head>
<body>

    <br>
    <form action="test.php", method="get">
        Name: <input type="text" name="name" >
        <input type="submit">
    </form>

    <?php 
        // echo("Hello People!");
        $name = $_GET["name"];

        // echo "<h1> Php is fun. Yeah! </h1>";
        // echo "<hr>";
        echo "<h1> My Name is $name </h1>";
        echo "<hr>";

        $age = 21;
        echo "<h2> My age is $age </h2>";
        echo "<hr>";
        $gpa = 8.71;
        $isMale = true;
        $future = null;
        echo "<h3> My GPA is $gpa </h3>";
        echo "<hr>";
        $city = "COIMBATORE";
        echo strtolower($city)."<br>";
        echo "string length -- ". strlen($city)."<br>";
        echo substr($city,3,2), "<br>";
        echo str_replace("COI", "jkjkj", $city);
        echo "<hr>";

        echo "james"."titus", "<br>";
        echo 234, 34.456, -34, -34.6, "<br>";
        echo 34+34 . "<br>";
        echo "3"+"3" . "<br>";
        echo 3%34 . "<br>";
        echo pow(10, 100) . "<br>";
        echo "<hr>"; 

        $nums = array(1,2,3,4,5,"james");
        // $nums = [1,2,3,4,5,];
        $nums[100] = "100";
        echo $nums[5] . $nums[100] . "<br>";
        echo count($nums) . "<br>";
        echo "<hr>"; 

        $student_marks = array("James"=>"A", "Prem"=>"A+");
        echo $student_marks["James"];
        echo "<hr>"; 
        
        function say_hi($name){
            echo "Hello, $name";
        }        
        say_hi($name);

        echo "<hr>"; 
        for ($i=0; $i < 5; $i++) { 
            echo $i . " ";
        }
        echo "<hr>"; 

        
    ?>


</body>
</html>