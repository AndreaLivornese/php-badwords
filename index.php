<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

    <h1>
        Elaboratore di testo
    </h1>

    <form action="testoElaborato.php">
        
        <label for="text-area">Inserisci qui del testo</label>
        <textarea name="paragrafo" id="text-area" cols="20" rows="3">

        </textarea>

        <label for="testo-censurato">Inserisci la parola da censurare</label>
        <input type="text" id="testo-censurato" name="censure" required>

        <input type="submit" value="Elabora">

    </form>
    
</body>
</html>