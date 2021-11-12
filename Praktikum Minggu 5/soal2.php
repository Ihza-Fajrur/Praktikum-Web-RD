<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $kata = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
    sort($kata);
    foreach ($kata as $key => $val) {
        echo  $val .",". "\n";
    }
    ?>
</body>
</html>