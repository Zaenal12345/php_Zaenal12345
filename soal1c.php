<?php
    $result = $_POST['result'];
    $kolom = $_POST['kolom'];
    $kolom_default = 1;
    $baris_default = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan 3</title>
</head>
<body>
    <?php for ($i=0; $i <count($result); $i++):?>
        <?php
            echo "<span>".$baris_default.".".$kolom_default." : ".$result[$i]."<span><br>"; 
            $kolom_default++;
        ?>
        <?php
            if($i+1 == $kolom){
                $baris_default++;
                $kolom_default = 1;
            }
        ?>
    <?php endfor;?>
</body>
</html>