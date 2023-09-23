<?php
require_once '../../database/connect_db.php';
$table = $_POST['id'];
$user_id = $_POST['user_id']['id'];
if ($table == 1 || $table == 2 || $table == 3) {
	$rest = 1;
		$map = '<p><div class="map" align="center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2669.8614532281726!2d37.627511077338916!3d55.757165892298595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4392c4177a48c404!2z0JrQvtGE0LXQvNCw0L3QuNGPINCd0L7QstCw0Y8g0J_Qu9C-0YnQsNC00Yw!5e0!3m2!1sru!2sru!4v1622419656808!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div></br>
		<h3 class="text-muted text-center">Ресторан находится здесь!</h3>';
} else if ($table == 4 || $table == 5) {
	$rest = 2;
		$map = '<p><div class="map" align="center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4491.179590336053!2d37.59204517317219!3d55.748255994156345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x76df6e254aa26fbd!2zMTYg0KLQvtC90L0g0JDRgNCx0LDRgg!5e0!3m2!1sru!2sru!4v1622420200428!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div></br>
		<h3 class="text-muted text-center">Ресторан находится здесь!</h3>';
} else if ($table == 6 || $table == 7 || $table == 8 || $table == 9) {
	$rest = 3;
		$map = '<p><div class="map" align="center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4217.497433501601!2d52.41280691482973!3d53.611473168067576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e323f5e1bba39f2!2z0J_QuNGG0YbQtdGA0LjRjy3QutCw0YTQtQ!5e0!3m2!1sru!2sru!4v1622420270726!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div></br>
		<h3 class="text-muted text-center">Ресторан находится здесь!</h3>';
} else if ($table == 10 || $table == 11) {
	$rest = 4;
		$map = '<p><div class="map" align="center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4217.6311025827135!2d52.406421966314234!3d53.610134899722354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc07953b1f5dde63!2z0JrQsNGB0L_QuNC5!5e0!3m2!1sru!2sru!4v1622419957532!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div></br>
		<h3 class="text-muted text-center">Ресторан находится здесь!</h3>';
}
$map = htmlspecialchars($map);
$reserve = "INSERT INTO `rest`.`reservation` (`user_id`, `table`, `rest`, `map`) VALUES ('$user_id', '$table', '$rest', '$map')";
$link->query($reserve);
?>
