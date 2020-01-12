<?php
require_once CONF . '/DB.php';

if(isset($_SESSION['logged_user'])) :
?>
Авторизован! Привет, <?php echo $_SESSION['logged_user']->login; ?>
<br>
<a href="/logout">Выйти</a>
<?php else :?>
<a href="login">Авторизоваться</a><br>
<a href="/signup">Регистрация</a>
<?php endif; ?>
