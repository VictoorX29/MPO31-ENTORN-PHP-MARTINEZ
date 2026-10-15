
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /** @var array $proyectos */
    require_once("04-multidimensional.php");
    

    if(isset($_GET["id"])){
       $id = $_GET['id'];
       echo($proyectos[$id]['nom']);

       echo $proyectos[$id]['tecnologia'];


    }
    ?>
</body>
</html>