<html>
    <head>
        <title> Koneksi Database MySQL</title>
    </head>
    <body>
        <?php
        $conn = mysqli_connect("localhost", "root", "" ,"db_sekolah2015");

        //check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL:". mysqli_connect_error();
            exit();
        }
        ?>
    </body>
</html>