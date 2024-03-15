<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container">
       

        <h1 class="text-center mb-5">
            Elaboratore di testo
        </h1>
    

        <div class="row justify-content-center ">

            <div class="col-3">

                <form action="testoElaborato.php">
                    
                    <label for="text-area">Inserisci qui del testo</label>
                    <textarea name="paragrafo" class="form-control mb-4" id="text-area">
            
                    </textarea>
            
                    <label for="testo-censurato">Inserisci la parola da censurare</label>
                    <input type="text" class="form-control mb-4" id="testo-censurato" name="censure" required>
            
                    <input type="submit" class="btn btn-danger" value="Elabora">
            
                </form>

            </div>


        </div>


    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>