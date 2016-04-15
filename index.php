<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="">
    <script src=""></script>
</head>

<body>
    <?php
        $host = 'localhost';
        $user = 'solberg_user';
        $pass = 'solberg_pass';
        $database = 'solberg_db';

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
        echo "<p>" . $row['inlagg'] . "</p>";
        echo "</article>";
    }

        $result->free();
        $conn->close();
        ?>
</body>

</html>
