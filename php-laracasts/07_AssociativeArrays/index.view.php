<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Associative Arrays</title>
</head>
<body>

<h1>Task:</h1>
<ul>
    <?php foreach ($task as $taskKey => $taskValue) : ?>
        <li>
            <strong><?= $taskKey ?></strong> <?= " = " . $taskValue ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
