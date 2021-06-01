<?php
declare(strict_types=1);

spl_autoload_register(function($class) {
    $a = explode('\\', $class);
    $last = array_pop($a);
    $fn = $class . '/' . $last . '.php';
    $fn = str_replace('\\', '/', $fn);

    //echo '<b>autoload: ' . $class . '</b> file: ' . $fn . '<br>';

    if (file_exists($fn)) require $fn;
});

// мобильное приложение: логин "Ivan", пароль "ololo"
// десктопное: логин: "Vania", пароль "ololo"

$login = "Vania";
$pass = "ololo";

function checkAuth(string $login, string $pass): string
{
    $app = new AppAuth();
    $mobile = new MobileAuth();
    echo $app->authenticate($login, $pass) ?? $mobile->authenticate($login, $pass) ?? "Пользователь не найден";
}

checkAuth($login, $pass);