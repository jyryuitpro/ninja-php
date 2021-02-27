<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!-- action이 빈 값이면 브라우저는 현재 URL로 폼을 전송한다. -->
<form action="" method="post">
    <label for="firstname">이름:</label>
    <input type="text" name="firstname" id="firstname">
    <label for="lastname">성:</label>
    <input type="text" name="lastname" id="lastname">
    <input type="submit" value="제출">
</form>
</body>
</html>