<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Checking for form submission...</h1>
    <?php    
        if(isset($_POST['sub'])){
            
            $name = $_POST['username'];
            $pswd = $_POST['password'];

            echo "Your username is : " . $name;
            echo "Your password is : " . $pswd;
        }
        
    ?>

    <form action="dem.php" method="post">
        <input type="text" name="username" placeholder="username here..." >
        <input type="password" name="password" placeholder="password here...">
        <input type="submit" value="submit" name="sub">
    </form>
</body>
</html>
