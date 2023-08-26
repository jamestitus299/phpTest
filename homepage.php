<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>

    <?php  include "header.html"?>
    <hr>
    <p> This is the body </p>
    <?php  

        $title = "One Word";
        $author = "James";
        $word_count = "2500";
        include "article.php"
    ?>
    <hr>
    <?php  include "book.php"?>
    <hr>
    <?php  include "footer.html"?>

</body>
</html>