<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form PHP</title>
    </head>
    <body>

    <form method="POST" action="html_aman.php">
        <label for="input">Masukkan Input:</label>
        <input type="text" name="input" id="input">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "<br>Input yang telah diolah: " . $input;
    }
    ?>
    <?php
    @$email = $_POST['email'];

    // Validasi alamat email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Alamat email valid : " . $input_email;
    } else {
        echo "Alamat email tidak valid.";
    }
    ?>

    </body>
</html>