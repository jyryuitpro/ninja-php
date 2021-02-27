<?php
try {
    $pdo = new PDO('mysql:host=192.168.10.10;dbname=ijdb;charset=utf8', 'ijdbuser', 'mypassword');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $output = '데이터베이스 접속 성공.';
} catch (PDOException $e) {
    $output = '데이터베이스 서버에 접속할 수 없습니다: ';
    $e->getMessage().', 위치: '.$e->getFile().'.'.$e->getLine();
}

include __DIR__.'/../templates/output.html.php';
