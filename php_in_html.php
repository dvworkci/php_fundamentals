<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP in HTML</title>
</head>
<body>

    <h1>
        <?php echo "Hello World"; ?>
    </h1>

    <p>My First Paragraph.</p>

    <?php 
        // SAMPLE SINGLE LINE COMMENT
        # COMMENT IN PHP
        /**
         * MULTI-LINE COMMENT
         */
        $x = 10; 
        $y = 12;

        echo "<h5>" . $x . " + " . $y . " = " . ($x + $y) . "</h5>";
    ?>
    
</body>
</html>