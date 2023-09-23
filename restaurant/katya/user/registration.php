<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
  <title>Регистрация</title>
</head>
<body>
<div id="autoriz">
<div class="outer">
  <div class="middle">
    <div class="inner">
        <div class="login-wr">
          <h2>Регистрация</h2>
          <div class="form">
            <form action="registrationCheck.php" method="post">
              <input name="name" type="text" placeholder="Имя" required="true">
              <input name="phone" type="phone" placeholder="Телефон" required="true">
              <input name="password" type="password" placeholder="Пароль" required="true">
              <button> Зарегистрироваться </button>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
