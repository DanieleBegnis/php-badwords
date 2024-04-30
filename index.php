<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="text.php" method="GET">
        <div>
            <label>Testo</label>
            <input name="text" type="textarea" required/>
        </div>

        <div>
            <label>Bad Word</label>
            <input name="word" type="text" required/>
        </div>

        <div>
            <button type="submit">Invia dati</button>
        </div>
    </form>
</body>
</html>