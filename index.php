<?php 
include ('./data/Movie.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <div>
        <?php 
        $matrix=new Movie('matrix','matrix','en',null,"Plagued by strange memories, Neo's life takes an unexpected turn when he finds himself back inside the Matrix.");
        var_dump($matrix);
        ?>
        <p> Il nome del Film: 
        <?php 
            echo $matrix->title;
        ?>
        </p> La Lingua originale: 
        <?php 
            echo $matrix->originalLanguage;
        ?>
        </p>La descrizione :
        <?php 
            echo $matrix->overview;
        ?>
        </p>
        <?php
        $matrix->setVote(4);

        var_dump($matrix);
        
        ?>
        
    </div>

</body>
</html>