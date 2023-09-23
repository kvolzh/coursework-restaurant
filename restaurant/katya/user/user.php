<?php
	$user_id = $_GET['id'];
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
<nav class="navbar navbar-expand-lg">
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
			<?php echo '<a class="nav-link text-center" href="cabinet.php?id='.$user_id.'"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Личный кабинет</font></font></a>'?>
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
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  	<div class="carousel-inner">
    	<div class="carousel-item active">
      		<img class="d-block w-100" src="../assets/images/carusel/carusel1.jpg" alt="First slide">
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100" src="../assets/images/carusel/carusel2.jpg" alt="Second slide">
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100" src="../assets/images/carusel/carusel3.jpg" alt="Third slide">
    	</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  	</a>
  	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  	</a>
</div>
<div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">О ресторане</h1>
      <p class="lead">В нашем ресторане вы можете попробовать кухни разных стран.</p>
</div>
<div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          	<div class="card-header">
            	<h4 class="my-0 font-weight-normal">Лучшие повара!</h4>
          	</div>
          	<div class="card-body">
            	<ul class="list-unstyled mt-3 mb-4">
              		<li>Все повара проходят строгий отбор! У нас работают только лучшие специалисты!</li>
            	</ul>
          	</div>
        </div>
        <div class="card mb-4 box-shadow">
          	<div class="card-header">
            	<h4 class="my-0 font-weight-normal">Кухни разных стран!</h4>
          	</div>
          	<div class="card-body">
            	<ul class="list-unstyled mt-3 mb-4">
              		<li>В нашем ресторане вы можете попробовать все!</li>
            	</ul>
          	</div>
        </div>
        <div class="card mb-4 box-shadow">
          	<div class="card-header">
            	<h4 class="my-0 font-weight-normal">Ресторан дома!</h4>
          	</div>
          	<div class="card-body">
            	<ul class="list-unstyled mt-3 mb-4">
              		<li>Вы можете заказать еду прямо к себе домой! Наши повара быстро приготовят еду, а курьер в кратчайшие сроки ее доставит прямо к вашей двери.</li>
            	</ul>
         	</div>
        </div>
    </div>
<hr></hr>
    <div class="parallax"></div>
<hr></hr>
<div class="pricing px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Забронировать столик</h1>
      <p class="lead">Забронировать столик вы можете здесь. Вам сразу позвонит наш администратор!</p>
</div>
<p></p>
<div class="container text-center">
    <div class="section__text">
        <p><?php include('spis/spis.php'); ?></p>
    </div>
</div>
</br>
<hr></hr>
<div class="pricing px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Наше меню</h1>
      <p class="lead">Самое вкусное. Приготовленное с любовью</p>
</div>
<p></p>
<div id="menu" class="carousel slide" data-ride="carousel">
  	<div class="carousel-inner">
    	<div class="carousel-item active">
      		<img class="d-block w-100" src="../assets/images/menu/menu1.jpg" alt="First slide">
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100" src="../assets/images/menu/menu2.jpg" alt="Second slide">
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100" src="../assets/images/menu/menu3.png" alt="Third slide">
    	</div>
	</div>
	<a class="carousel-control-prev" href="#menu" role="button" data-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  	</a>
  	<a class="carousel-control-next" href="#menu" role="button" data-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  	</a>
</div>
</br>
<hr></hr>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Наши напитки</h1>
      <p class="lead">Наше барное меню</p>
</div>
<div id="bar" class="carousel slide" data-ride="carousel">
  	<div class="carousel-inner">
    	<div class="carousel-item active">
      		<img class="d-block w-100" src="../assets/images/menu/bar1.jpg" alt="First slide">
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100" src="../assets/images/menu/bar2.png" alt="Second slide">
    	</div>
	</div>
	<a class="carousel-control-prev" href="#bar" role="button" data-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  	</a>
  	<a class="carousel-control-next" href="#bar" role="button" data-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  	</a>
</div>
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