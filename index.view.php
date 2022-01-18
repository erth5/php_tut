<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="UTF-8">
    <title>Tutorial</title>
    <style>
        header {
            background: aqua;
            padding: 1em;
            text-align: center;
        }
    </style>
</head>
<body>

<header>
    <h1>
        <?php
        # imported from index.php, no error
            echo $greeting
        ?>
    </h1>
</header>

<?php
    # imported from index.php, no error
    foreach ($names as $name){
        # . means +
        echo $name . ', ';
}

?>

</body>
</html>

