<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $data = ['高江','掛谷','日尾','薄井','和田'];
    foreach($data as $value){
        var_dump($value);
        if($value === '和田'){$data[]='鈴木';}
        }
    ?>
</body>
</html>