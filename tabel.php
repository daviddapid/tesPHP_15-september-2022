<?php 
    require "data.php";
    
    $role = checkData($_POST["username"], $_POST["password"], $user);

    function checkData($username, $password, $array){
        foreach ($array as $record) {
            if ($username == $record["username"] && $password == $record["password"]) {
                return $record["role"];
            }
        }
        header("location: index.php?error");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel</title>
    <style>
        a{
            text-decoration: none;
            color: white;
            padding: 5px 10px;
            background-color: orangered;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Data siswa (<?= $role?>)</h1>
    <?php if($role == "siswa") :?>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
            </tr>
            <?php foreach($user as $i => $record) :?>
                <tr>
                    <td><?= $i?></td>
                    <td>
                        <img src="img/<?= $record['img']?>.jpg" width="200px">
                    </td>
                    <td><?= $record["username"]?></td>
                </tr>
            <?php endforeach?>
        </table>
    <?php endif?>
    <?php if($role == "admin") :?>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
            <?php foreach($user as $i => $record) :?>
                <tr>
                    <td><?= $i+1?></td>
                    <td>
                        <img src="img/<?= $record['img']?>.jpg" width="200px">
                    </td>
                    <td><?= $record["username"]?></td>
                    <td>
                        <a href="detail.php?username=<?= $record["username"]?>&password=<?= $record["password"]?>&alamat=<?=$record["alamat"]?>&tlp=<?=$record["tlp"]?>&img=<?=$record["img"]?>">Detail</a>
                    </td>
                </tr>
            <?php endforeach?>
        </table>
    <?php endif?>
    <br>
    <a href="index.php">back</a>
</body>
</html>