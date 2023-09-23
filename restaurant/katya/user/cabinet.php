<?php
require_once'../database/databaseInfo.php';
$user_id = $_GET['id'];
$user_info = user($link, $user_id);
foreach ($user_info as $key => $value) {
  $name = $value[1];
  $phone = $value[2];
}
$reserve_info = reserve($link, $user_id);
?>
<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>...</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="../assets/js/js.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg  navbar-light bg-light">
    <div class="container-fluid">
    	<div class="col-sm-1"></div>
    	<div class="col-sm-1"></div>
    	<div class="col-sm-6">
        	<a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ресторан</font></font></a>
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Переключить навигацию">
        	<span class="navbar-toggler-icon"></span>
        </button>
    	</div>
        <div class="col-sm-2">
			<?php echo '<a class="nav-link text-center" href="user.php?id='.$user_id.'"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Главная</font></font></a>'?>
        </div>
        <div class="col-sm-1">
			<a class="nav-link text-center" href="../index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Выйти</font></font></a>
        </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-1">
        </div>
    </div>
</nav>
<div class="p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal">Личный кабинет</h1>
    <p class="fs-5 text-muted">Здесь вы можете посмотреть свои бронирования и изменить свои личные данные.</p>
</div>
<hr>
<div class="container py-3">
	<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Ваше имя</h4>
          </div>
          <div class="card-body">
            <h1><small class="text-muted fw-light"><?php echo $name;?></small></h1>
            </br>
              <?php echo "<form class='izm' action='change/izm_name.php?id=".$user_id."' method='post'></h1>
                <p><input name='name' type='text' class='' placeholder='Введите имя'></p></br>
                <p><input type='submit' name='submit' value='Изменить' class='w-100 btn btn-lg btn-outline-primary'>
              </form>";?>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Ваш телефон</h4>
          </div>
          <div class="card-body">
            <h1><small class="text-muted fw-light"><?php echo $phone;?></small></h1>
            </br>
              <?php echo "<form class='izm' action='change/izm_phone.php?id=".$user_id."' method='post'></h1>
                <p><input name='phone' type='text' class='' placeholder='Введите телефон'></p></br>
                <p><input type='submit' name='submit' value='Изменить' class='w-100 btn btn-lg btn-outline-primary'>
              </form>";?>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Смена пароля</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted fw-light">Введите пароль</small></h1>
            </br>
              <?php echo "<form class='izm' action='change/izm_password.php?id=".$user_id."' method='post'></h1>
                <p><input name='password' type='text' class='' value=''></p></br>
                <p><input type='submit' name='submit' value='Изменить' class='w-100 btn btn-lg btn-outline-primary'>
              </form>"?>
          </div>
        </div>
      </div>
    </div>
</div>
<hr>
<div class="p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal">Ваши бронирования</h1>
    <?php if (!$reserve_info) {
        echo '<p class="fs-5 text-muted">Вы не бронировали столик.</p>
                <div class="pricing px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <p class="lead">Забронировать столик вы можете здесь. Вам сразу позвонит наш администратор!</p>
                </div><p></p><div class="container text-center">
                <div class="section__text">
              <p>';
        include("spis/spis.php");
        echo '</p>
            </div></div>';
    } else {
      foreach ($reserve_info as $key => $value) {
        $map = htmlspecialchars_decode($value[4]);
        $table = $value[2];
        $reserve = $value[4];
        echo '<p class="fs-5 text-muted">Вы забронировали столик № '.$table.'. в этом ресторане</p>';
        echo $map;
        if ($reserve == 0) {
          echo "Бронирование в обработке. Скоро с вами свяжется администратор для подтверждения.<p>По всем вопросам обращайтесь по телефону 8(495)495 49 45.</br></br></br>";
        }
      };
    }?>
<footer class="pt-4 my-md-5 pt-md-5 border-top">
  <div class="row">
    <div class="col-12 col-md">
            <small class="d-block mb-3 text-muted">© 2021</small>
        </div>
        <div class="col-6 col-md">
            <small class="d-block mb-3 text-muted">РГУ им. А.Н. Косыгина</small>
        </br></br></br>
        </div>
        <div class="col-6 col-md">
            <small class="d-block mb-3 text-muted">Информационные системы и технологии</small>
        </div>
        <div class="col-6 col-md">
            <small class="d-block mb-3 text-muted">Волженская Е. В.</small>
          </div>
        </div>
      </footer>
    </div>
</div>
</body>
</html>