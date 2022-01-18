<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="UTF-8">
    <title>Tutorial</title>
    <style>
        header {
            background: aqua;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <h1>Hello, World</h1>
    <?php
    # for example put: &greeting=6&name=<a href="http://google.com">frank</a>
    # on Browser line
    $greeting = $_GET['greeting'];
    echo $greeting;

    echo htmlspecialchars($_GET['name']);

    ?>

</header>



</body>
</html>

