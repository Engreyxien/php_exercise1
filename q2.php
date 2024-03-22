<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Question 2</h1>
    <?php
    function removeOdd($numbers) {
        $result = array_filter($numbers, function($num) {
            return $num % 2 === 0;
        });
        return ($result);
    }
    
    $numArr = [15, 12, 24, 33, 7, 11, 28, 69, 99, 100];
    $result = removeOdd($numArr);
    
    print_r($result);
    ?>
</body>
</html>