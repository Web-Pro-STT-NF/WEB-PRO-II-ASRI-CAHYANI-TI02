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
    $tims = ["ica", "rohmah", "mutia", "lastri"];
    array_unshift($tims, "nadine", "ira");
    foreach($tims as $person){
        echo $person. "<br/>";
    }
    ?>
</body>
</html>