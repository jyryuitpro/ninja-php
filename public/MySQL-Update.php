<?php
try {
    $pdo = new PDO('mysql:host=192.168.10.10;dbname=ijdb;charset=utf8', 'ijdbuser', 'mypassword');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'UPDATE joke SET jokedate="2012-04-01" WHERE joketext LIKE "%프로그래머%"';

    // 쿼리로 인해 변경 사항이 반영된 로우 개수를 반환한다.
    $affectedRows = $pdo->exec($sql);

    $output = '갱신된 row: '.$affectedRows.' 개.';
} catch (PDOException $e) {
    $output = '데이터베이스 서버에 접속할 수 없습니다: ';
    $e->getMessage().', 위치: '.$e->getFile().'.'.$e->getLine();
}

include __DIR__.'/../templates/output.html.php';