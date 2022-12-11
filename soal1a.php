<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #tampilan-awal-form{
            width: 500px
        }
    </style>
</head>
<body>
    <div id="tampilan-awal-form">
        <form action="soal1b.php" method="post">
            <label for="baris">Inputkan Jumlah Baris:</label>&nbsp;
            <input type="text" name="baris" id="baris">
            <br><br>
            <label for="kolom">Inputkan Jumlah Kolom:</label>&nbsp;
            <input type="text" name="kolom" id="kolom">
            <br><br>
            <div style="text-align:center">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>