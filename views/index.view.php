<nav>
    <ul>
        <li><a href="../contact.php">Contact Page</a></li>
    </ul>
</nav>

<?php
echo "this text doesn`t understand: /n, but: $a_variable and Line-breaks: <br>";
echo 'this text doesn`t understand: /n or: $a_variable, but Line-breaks:<br>';
?>

<?php var_dump($array); ?>
<br>

<?php var_dump($tasks[0]->test);?>
<br>

<?php $tasks[0]->complete(); ?>
<br>

<?php var_dump($tasks[0]->completed);?>
<br>

<?php var_dump($tasks);?>
<br>

<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
                <span style="text-decoration: line-through;"></span>
            <?php else: ?>
                <?= $task->description; ?>
            <?PHP endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php var_dump($_SERVER) ?>

<p>End of File</p>
