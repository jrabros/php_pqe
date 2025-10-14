<?php require "../bootstrap.php";?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - UDEMY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
            try{
                require load();
            }catch(Exception $e){
                echo $e->getMessage();
            }
        ?>
    </div>
</body>
</html>