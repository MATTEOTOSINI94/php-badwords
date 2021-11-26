<?php
    $welocome="Benevenuto nella mia pagina creata con PHP";

    $toCensure=$_GET["censura"];
    $censure="***";
    $testoCensurato= str_replace($toCensure,$censure,$welocome);

    echo"<pre>";
    var_dump($welocome);
    echo"</pre>"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $welocome ." ". strlen($welocome)?></p>
    <p><?php echo $testoCensurato ." ".strlen($testoCensurato) ?></p>
</body>
</html>