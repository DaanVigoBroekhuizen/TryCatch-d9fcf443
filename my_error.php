<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="my_error.php" method="post" name="post">
    
        <input type="number" name="number">
        <input type="submit" name="submit">
    
    </form>


<?php


$number = $_POST['number'];

function countDown($number) {
    if($number<1 || $number>10) {
        throw new Exception("het getal moet tussen 1 en 10 zijn");
    }
    
    echo 'als je dit ziet heb je een getal tussen 1 en 10 geselecteerd';
}
        
try {
    countDown($number);
}

catch(Exception $e) {
    echo '' .$e->getMessage();
}
    ?>

</body>
</html>