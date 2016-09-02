<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Conditionals</title>
</head>
<body>

<h1>Tasks:</h1>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li> 
            <?php if ($task->isCompleted()) : ?>
                <strike><?= $task->getTitle(); ?></strike>
            <?php else : ?>
                <?= $task->getTitle(); ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
