<?php

    require('db.php');
    
    if(isset($_POST['submit']))
    {
        $img = $_POST['img'];
        $name = $_POST['name'];

        $db->query("INSERT INTO plates(img, name) VALUES ('$img', '$name')");

        header('location:index.php');
    }

?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel = "stylesheet" href = "src/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Play:wght@400;700&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    
    <title>Создание</title>

</head>

<body>
    
    <header>

        <a id = "back" href = "index.php"> <span>назад</span> </a>

    </header>

    <div class = "plate_content" id = "create_plate">

        <form method="POST" action="create.php">
            <div> <input type = "text" name = "img" placeholder = "ссылка на обложку"/> </div>
            <div> <input type = "text" name = "name" required placeholder = "название"/> </div>
            <div> <input id = "create_button" type = "submit" name="submit" value = "создать" /> </div>
        </form>

    </div>

</body>

</html>


