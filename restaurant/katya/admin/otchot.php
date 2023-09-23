<?php
require_once'../database/databaseInfo.php';
$reserve_info = reservation($link, $user_id);
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
</head>
<body>
<nav class="navbar navbar-expand-lg  navbar-light bg-light">
    <div class="container-fluid">
    	<div class="col-sm-1"></div>
    	<div class="col-sm-1"></div>
    	<div class="col-sm-6">
        	<a class="navbar-brand" href="admin.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Админка</font></font></a>
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Переключить навигацию">
        	<span class="navbar-toggler-icon"></span>
        </button>
    	</div>
        <div class="col-sm-2">
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
    <h1 class="display-4 fw-normal">Составление отчета</h1>
    <p class="fs-5 text-muted"></p>
</div>
<hr>
<div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Отчет по пользователю</h4>
            </div>
            <div class="card-body">
              <?php echo "<form class='izm' action='otchotUser.php' method='post'></h1>
                <p><input name='userId' type='text' class='' placeholder='Введите id пользователя'></p></br>
                <p><input type='submit' name='submit' value='Отчет' class='w-100 btn btn-lg btn-outline-primary'>
              </form>";?>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Отчет по ресторану</h4>
            </div>
            <div class="card-body">
              <?php echo "<form class='izm' action='otchotRest.php' method='post'></h1>
                <p><input name='restId' type='text' class='' placeholder='Введите id ресторана'></p></br>
                <p><input type='submit' name='submit' value='Отчет' class='w-100 btn btn-lg btn-outline-primary'>
              </form>";?>
            </div>
        </div>
    </div>
<hr></hr>
</div>
</body>
</html>