<?php
require_once CONF . '/DB.php';

$data = $_POST;
if( isset($data['do_login']))
{
  $erros = array();
  $user = R::findOne('users', 'login = ?', array($data['login']));
  if($user){
    if(password_verify($data['password'], $user->password)){
      $_SESSION['logged_user'] = $user;
      echo '<div style="color:green;">Вы авторизованы</div><hr>';
    }else{
      $errors[] = 'Не верно найден пароль';
    }
  }else{
    $errors[] = 'Пользователь с таким логином не найден';
  }

  if(! empty($errors)){
    echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
  }
}

?>

<form action="/login" method="POST">

  <p>
    <strong>Ваш логин</strong>
    <input type="text" name="login" value="<?php echo @$data['login'];?>">
  </p>

  <p>
    <strong>Ваш пароль</strong>
    <input type="password" name="password">
  </p>

  <p>
    <button type="submit" name="do_login">Авторизоваться</button>
  </p>
