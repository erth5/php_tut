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

    <!-- Variant 0 -->
<?php
    # imported from index.php, no error
    foreach ($names as $name){
        # . means +
        echo $name . ', ';
}
?>

    <!-- Variant 1 -->
<ul>
    <?php
    foreach ($names as $name) {
        # " required instead of '
        echo "<li>$name</li>";
    }
    ?>
</ul>

    <!-- Variant 2, more option to style -->
<ul>
    <?php foreach ($names as $name) : ?>
    <li><?= $name; ?></li>
    <?php endforeach; ?>
</ul>


<!-- own tag -->
<?php
if ($own = '?')
    echo TRUE;
?>




</body>
</html>

