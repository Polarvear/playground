<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="./style/register.css">
    
</head>
<body>
    <div class="signup-container">
        <h2>회원가입</h2>
        <form>
            <div class="form-group">
                <label for="username">아이디</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">이메일</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">비밀번호</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">비밀번호 확인</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit">가입하기</button>
        </form>
    </div>
</body>
</html>
