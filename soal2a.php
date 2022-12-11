<?php
    $connection = mysqli_connect('localhost','root','','testdb');
    if(!$connection){
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['search'])){
        // echo 'ada';
        $query = "SELECT hobi, COUNT(person_id) AS jumlah_person FROM hobi WHERE hobi='".$_POST['search']."' GROUP BY hobi ORDER BY jumlah_person DESC";
    }else{
        $query = "SELECT hobi, COUNT(person_id) AS jumlah_person FROM hobi GROUP BY hobi ORDER BY jumlah_person DESC";
    }
    $data_filter_by_hobi = mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Soal 2</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="search" id="search" placeholder="search by hobi">&nbsp;
        <button type="submit">cari</button>
    </form>
    <br>
    <table border="1" cellpadding="2" cellspacing="0">
        <thead>
            <tr>
                <th>Hobi</th>
                <th>Jumlah Person</th>
            </tr>
        </thead>
        <tbody> 
            <?php while($data = mysqli_fetch_assoc($data_filter_by_hobi)):?>
                <tr>
                    <td><?= $data['hobi']?></td>
                    <td style="text-align:right"><?= $data['jumlah_person']?></td>
                </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</body>
</html>