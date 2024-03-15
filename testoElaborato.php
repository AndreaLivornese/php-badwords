<?php

$paragrafo = $_GET['paragrafo'];
$censura = $_GET['censure'];

$done=false;// variabile di flag per capire se la censura è avvenuta o meno

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>text-censured</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<!-- vue -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>



<?php

if($censura != ''){
    $done=true;

    $array_paragrafo = explode(" ",$paragrafo);

    $array_paragrafo = str_ireplace($censura,"***", $array_paragrafo);

    $result = implode(" ",$array_paragrafo);

    if(strcmp($result, $paragrafo)==0){
        $done=false;
        $result = "La stringa non è stata modificata e non è stata applicata nessuna censura.";
    }
}else{
    $result = "La stringa non è stata modificata e non è stata applicata nessuna censura.";
}


?>

<div class="container">
    

    <h1 class="text-center mb-5">
        Elaboratore di testo
    </h1>


    <div class="row justify-content-center ">

        <div class="col-3">

        <div class="par-wrapper mb-4 bg-body-tertiary rounded p-3">
            <p>
                <?php echo  $paragrafo;?> 
            </p>
            <div>
                <?php echo  "La stringa è lunga " .strlen($paragrafo). " lettere";?> 
            </div>
        </div>


        <div class="par-wrapper bg-success rounded p-3 text-white">
            <p>
                <?php echo $result ?>
            </p>

            <div>
                <?php 
                    if($done == true){
                        echo "La stringa censurata è lunga ".strlen($result)." lettere."; 
                    }

                ?> 
            </div>
        </div>

        </div>


    </div>


</div>










    


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
</body>
</html>