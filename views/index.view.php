<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>


</head>
<body>
<nav>
    <ul>
        <li><a href="about.view.php">About</a></li>
        <li><a href="contact.view.php">Contact</a></li>
    </ul>
</nav>

    <h1>
        Tasks for the day
    </h1>

<?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task->completed) : ?>
            <strike> <?= $task->description; ?> </strike>
        <?php else: ?>
        <?= $task->description; ?>
        <?php endif; ?>
    </li>
<?php endforeach; ?>

</body>
</html>