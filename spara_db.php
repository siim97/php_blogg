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
            die("error:" $conn->connect_eror);

        $sql = "INSERT INTO bloggen (rubrik, tidsstampel) VALUES ('$rubrik', '$inlagg' )";

        $result = $conn->query($sql);

        if(!$result)
            die("Kunde inte spara inlägg: " . $conn->error);
        else
            echo "Inlägget sparades.";

        $conn->close;
        ?>
    </body>
</html>
