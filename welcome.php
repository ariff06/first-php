<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Welcome</title>
    <style>
        
    </style>
</head>
<body style="font-family: Arial,
    sans-serif; background-color: #ff00e6;
    margin: 0; padding: 0; display: flex;
    flex-direction: column; align-items: center;
    justify-content: center; height: 100vh;"
    >
    <center>
        <h1 >SELAMAT DATANG!</h1>
        
        <?php echo $_GET ["fname"];?> <?php echo $_GET ["lname"];?><br> 
        Seorang <?php echo $_GET ["gender"];?><br>
        Dari <?php echo $_GET ["Nationality"];?><br>
        <?php
        if(isset($_GET['language'])) {
            $languages = $_GET['language'];
            echo "Menggunakan bahasa ";
            foreach($languages as $language) {
                echo $language . ", ";
            }
            echo "<br>";
        } else {
            echo "Anda belum memilih bahasa<br>";
        }
        ?>
        BIO :  <?php echo $_GET ["data"];?><br>
        <h3>Terima kasih telah bergabung di website kami. Media belajar kita bersama!</h3>
    </center>
</body>
</html>