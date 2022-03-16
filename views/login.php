<?php
$title = 'Регистрация в системе';
$css =[
    'login/login.css'
];
@include_once 'header.php';
?>

<body>
<form action="" method="POST">
    <input type="text" name="login" placeholder="Введите логин" required>
    <input type="password" name="password" placeholder="Введите пароль" required>
    <input class="submit" type="submit" value="Вход">
</form>
</body>

<?php @include_once 'footer.php'; ?>
