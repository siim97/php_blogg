<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="">
    <script src=""></script>
</head>

<body>
   <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="index.php">Hem</a></li><li role="presentation"><a href="skriv_db.php">Skriv inlägg</a></li>
  <li role="presentation"><a href="lista_db.php">Lista inlägg</a></li>
  <li role="presentation"><a href="sok_db.php">Sök</a></li>
</ul>
    <?php
        require_once('config_db.php');

        $conn = new mysqli($host, $user, $pass, $database);
        if ($conn->connect_error)
            die("error:" . $conn->connect_eror);

        $sql = "SELECT * FROM bloggen";

        $result = $conn->query($sql);

        if(!$result)
            die("Kunde inte spara inlägg: " . $conn->error);


    // Gick det bra? Om inte skriv felmeddelande
    if (!$result)
        die("Kunde inte hämta inlägg: " . $conn->error);

    echo "<h1>Min kära blogg</h1>";

    // Berätta hur många poster vi hittat som motsvara sökvillkoret
    echo "<p>Hittat " . $result->num_rows . " poster i tabellen</p>";

    // Skriv ut alla inlägg en efter en
    while ($row = $result->fetch_assoc()) {
        echo "<article>";
        echo "<h3>" . $row['rubrik'] . "</h3>";
        echo "<h5>" . $row['tidstampel'] . "</h5>";
        echo "<p>" . nl2br($row['inlagg'], false) . "</p>";
        echo "</article>";
    }

        $result->free();
        $conn->close();
        ?>
</body>

</html>
