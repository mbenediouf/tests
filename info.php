<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <?php
    $moyenne = 15;
    $decision = 'admis';
    $mention = 'passable';
    
    if ($moyenne >= 10){
        echo " tu es $decision";
    }else{
        echo" tu es eliminer";
    }
    if($moyenne == 10){
        echo " vous avez le mention <span class='text-primary'>$mention</span>";
    }
    elseif($moyenne >10 && $moyenne <= 12){
        echo " vous avez le mention <span class='text-success'>Assez Bien</span> ";
    }
    elseif($moyenne >12 && $moyenne <= 14){
        echo " vous avez le mention <span class='text-secondary'>Bien</span>";
    }
    elseif($moyenne >14 && $moyenne <= 16){
        echo " vous avez le mention  <span class='text-danger fs-4'>Tres Bien</span>";
    }
    elseif($moyenne >= 17 && $moyenne <= 20){
        echo " vous avez le mention  <span class='text-warning'>Exellent</span>";
    }
   

   
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>