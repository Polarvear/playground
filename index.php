<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/index.css">

</head>
<body>
    <div class="login-wrapper">
        <h2>Login</h2>
        <form method="post" action="서버의url" id="login-form">
            <input type="text" name="userName" placeholder="Email">
            <input type="password" name="userPassword" placeholder="Password">
            <label for="remember-check">
                <input type="checkbox" id="remember-check">아이디 저장하기
            </label>
            <input type="submit" value="Login">
            <a href="register.php">가입하기</a>
        </form>
    </div>
</body>
</html>


