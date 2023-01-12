<?php

    require("db.php");

    if ($_SERVER['REQUEST_METHOD'] === 'GET')
    {
        $id = $_GET['id'];
        $plates = $db->query("SELECT * FROM plates WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
        $plates = $plates[0];
    }

    else if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $id = $_POST['id'];
        $img = $_POST['img'];
        $name = $_POST['name'];

        $db->query("UPDATE plates SET img = '$img', name = '$name' WHERE id=$id");

        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Play:wght@400;700&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

    <title>Изменение</title>
    
</head>

<body>

    <header>

    <a id = "back" href = "index.php"> <span>назад</span> </a>

    </header>

    <div class = "plate_content" id = "create_plate">

        <form action="" method="POST">
            <input type="text" name="img" value="<?php echo $plates['img']?>">
            <br>
            <input type="text" name="name" value="<?php echo  $plates['name'] ?>">
            <br>
        
            <input type="hidden" name="id" value="<?php echo  $plates['id'] ?>">
            <br>
            <button type="submit" name="submit">Сохранить</button>
        </form>

    </div>
</body>

</html>



