<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & HTML</title>
</head>
<body>
    <!-- Ovo je html komentar -->
    <?php
        // Enable error reporting
        // error_reporting(E_ALL);
        // ini_set('display_errors', 1);


        include "include_require.php";
        require "include_require.php";
        $ispis = "Ovo je ispisano pomoću PHP jezika.";
    ?>

    <section>
        <?php echo $ispis; ?>
    </section>

    <section>
        <p>
            <!-- ?= short for php echo -->
            <?= $ispis2  ?>
            <?= '<br>'; ?>
            <?= 'Skraceni PHP tag za ispis'; ?>
        </p>
    </section>
</body>
</html>