<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title>Skriv blogginlägg</title>
        <link rel="stylesheet" href="">
        <script src="style.css"></script>
    </head>
    <body>
        <h2>Skriv inlägg</h2>
        <form action="spara_db.php" method="post">
            <label>Rubrik</label><input type="text" maxlength="100" name="rubrik">
            <label>Text</label name="inlagg"><textarea></textarea >
            <input type="submit" value="Posta">
        </form>
    </body>
</html>
