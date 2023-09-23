<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
  <title>Авторизация</title>
</head>
<body>
<div id="autoriz">
<div class="outer">
  <div class="middle">
    <div class="inner">
        <div class="login-wr">
          <h2>Вход</h2>
          <div class="form">
            <form action="authorizationCheck.php" method="post">
              <input name="name" type="text" placeholder="Логин">
              <input name="password" type="password" placeholder="Пароль">
              <a href="registration.php"> <p> У вас нет аккаунта? Регистрация </p></a>
              <button> Авторизация </button>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
