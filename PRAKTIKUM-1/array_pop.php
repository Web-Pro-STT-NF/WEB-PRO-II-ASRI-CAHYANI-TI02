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
    $tims = ['Ica','Rohmah','Lastri','Mutia'];
    array_pop($tims);
    foreach($tims as $person ) {
    echo $person. '<br/>';
    }
?>
</boby>
</html>