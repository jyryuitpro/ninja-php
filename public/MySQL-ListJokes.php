<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
    <body>
        <?php if (isset($error)): ?>
        <p>
            <?php echo $error; ?>
        </p>
        <?php else:?>
        <?php foreach ($jokes as $joke): ?>
        <blockquote>
            <p>
            <?php echo htmlspecialchars($joke, ENT_QUOTES, 'UTF-8'); ?>
            </p>
        </blockquote>
        <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>