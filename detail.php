<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Detail</h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td rowspan="4">
                <img src="img/<?=$_GET["img"]?>.jpg" width="200">
            </td>
        </tr>
        <tr>
            <td>nama</td>
            <td><?= $_GET["username"]?></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><?= $_GET["alamat"]?></td>
        </tr>
        <tr>
            <td>telepon</td>
            <td><?= $_GET["tlp"]?></td>
        </tr>
    </table>
    
</body>
</html>