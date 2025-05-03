
<?php 

define('BASE_URL', 'http://localhost/your_project/'); // Define the base URL for your project
$hello = "Hello World!";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        $numer = 10;
        echo BASE_URL;
        echo "The number is: {{$hello}} <br>";

        echo strlen('Hello');

?>
</body>


</html>