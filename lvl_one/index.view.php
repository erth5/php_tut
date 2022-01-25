<!-- DO NOT OPEN THIS FILE -->
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

<?php
$pdo = connectToDB();
$tasks = fetchAllTasks($pdo);
var_dump($tasks[0]->test);
var_dump($tasks[0]->abfg);
?>


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
if ($own == "vv")
    #echo TRUE;
?>

<ul>
    <?php foreach ($person as $feature => $val) : ?>
        <li><strong><?= $feature; ?></strong> <?= $val; ?></li>
    <?php endforeach; ?>

</ul>

<?php  echo '<pre>';
var_dump($person);
echo '</pre>'; ?>

<?php echo '<pre>';
var_dump($sonst = ["fwx", 'thx', "NVME"]);
echo '</pre>'; ?>

<?php
dump_thinks('Hello', 'World');
?>
<blockquote></blockquote>
<?php
swap_thinks('World', 'Hello');
?>
<blockquote></blockquote>

<?php
echo $own
?>

</body>
</html>

