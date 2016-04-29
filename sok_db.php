<!DOCTYPE html>
<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title>Skriv blogginlägg</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="">
        <script src="style.css"></script>
    </head>
    <body>
      <ul class="nav nav-tabs">
       <li role="presentation"><a href="index.php">Hem</a></li><li role="presentation"><a href="skriv_db.php">Skriv inlägg</a></li>
  <li role="presentation"><a href="lista_db.php">Lista inlägg</a></li>
  <li role="presentation"class="active"><a href="sok_db.php">Sök</a></li>
        <h2>Sök inlägg</h2>
        <form action="soklista_db.php" method="post">
            <label>Sökterm</label><br><input type="text" maxlength="100" name="sokterm"><br>
            <input type="submit" value="Sök">
        </form>
    </body>
</html>
