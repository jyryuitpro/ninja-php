<?php
// __DIR__ : /home/vagrant/Code/Project/public
try {
    include __DIR__.'/../include/DatabaseConnection.php';

    $sql = 'SELECT joke, id, joketext, name, email FROM joke a INNER JOIN author b ON a.authorid = b.id';
    $jokes = $pdo->query($sql);

    $title = '유머글 목록';

    ob_start();

    include __DIR__.'/../templates/jokes.html.php';

    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = '오류가 발생했습니다.';

    $output = '데이터베이스 오류: '.$e->getMessage().', 위치: '.$e->getFile().':'.$e->getLine();
}

include __DIR__.'/../templates/layout.html.php';
