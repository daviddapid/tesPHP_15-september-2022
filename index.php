
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        .inputField{
            margin-bottom: 19px;
        }
        input{
            display: block;
        }
        small{
            color: red;
            font-style: italic;
            font-weight: bold;
            display: block;
        }
    </style>
</head>
<body>
    <h1>LOGIN USER</h1>
    <form  method="POST" action="tabel.php">
        <div class="inputField">
            <label for="username">username :</label>
            <input type="text" name="username" required>
        </div>
        <div class="inputField">
            <label for="password">password :</label>
            <input type="password" name="password" required>    
        </div>
        <?php if(isset($_GET["error"])) :?>
            <small>Username atau password salah</small>
        <?php endif?>
        <button type="submit" name="submit">Login</button>
    </form>

</body>
</html>