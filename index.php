<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>❤</title>
    </head>
    <body>
        <form>
            <label for="nama">Masukkan Nama:</label>
            <input type="text" id="nama" name="nama">
            <button type="submit">Submit</button>
        </form>
        
        <?php
            if(isset($_GET["nama"])) {
                $nama = $_GET["nama"];
                echo "<h1>Halo, " . $nama . "!</h1>";
            }
        ?>
    </body>
</html>
