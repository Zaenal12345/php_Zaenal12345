<?php
    $baris = $_POST['baris'];
    $kolom = $_POST['kolom'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan 2</title>
    <style>
        .width-input{
            width:70px
        }
    </style>
</head>
<body>
    <?php if($baris != "" && $kolom != ""):?>
        <form action="soal1c.php" method="post">
            <input type="hidden" name="baris" value="<?= $baris?>">
            <input type="hidden" name="kolom" value="<?= $kolom?>">

            <?php for($i=1; $i<=$baris; $i++):?>
                <?php for($j=1; $j<=$kolom; $j++):?>
                    <?php echo $i.".".$j; ?> &nbsp; <input type="text" name="result[]" class="width-input">
                <?php endfor;?>    
                <br><br>
            <?php endfor;?>
            <button type="submit">Submit</button>
            
        </form>
    <?php endif;?>
</body>
</html>