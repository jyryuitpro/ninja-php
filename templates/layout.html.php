<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="jokes.css">
    <title><?=$title?></title>
</head>
<body>
    <nav>
        <header>
            <h1>인터넷 유머 세상</h1>
        </header>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="jokes.php">유머 글 목록</a></li>
            <li><a href="addjoke.php">유머 글 등록</a></li>
        </ul>
    </nav>

    <main>
        <?=$output?>
    </main>

    <footer>
        (c) IJDB 2021
    </footer>
</body>
</html>