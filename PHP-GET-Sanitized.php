<?php
//$name = $_GET['name'];
// htmlspecialchars() : 특별한 HTML 문자를 HTML 문자 엔티티로 변환한다.
//echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8').'님, 홈페이지 방문을 환영합니다!';

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
// htmlspecialchars() : 특별한 HTML 문자를 HTML 문자 엔티티로 변환한다.
echo htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8').' '.
    htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8')
    .'님, 홈페이지 방문을 환영합니다!';
