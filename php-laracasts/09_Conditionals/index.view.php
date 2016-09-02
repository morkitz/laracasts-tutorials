<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Conditionals</title>
</head>
<body>

<h1>Task:</h1>
<ul>
    <li><strong>Heading:</strong> <?= $task['title'] ?></li>
    <li><strong>Due until:</strong> <?= $task['due'] ?></li>
    <li><strong>Assigned to:</strong> <?= $task['assigned_to'] ?></li>
    <li><strong>Completed: </strong>
        <?php if($task['completed']) : ?>
            <span> &#10003; </span>
        <?php else : ?>
            <span> &#10007; </span>
        <?php endif; ?>
    </li>
    <li><strong>Ever postponed? </strong>
        <?= $task['postponed'] ? 'Yes' : 'No'; ?>
    </li>
</ul>

</body>
</html>
