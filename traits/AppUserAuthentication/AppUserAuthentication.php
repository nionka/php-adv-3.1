<?php
declare(strict_types=1);

namespace traits;

trait AppUserAuthentication
{
    private string $login = "Ivan";
    private string $password = "ololo";

    public function authenticate(string $login, string $password): ?string {
        if ($this->login === $login && $this->password === $password) {
            return "Пользователь приложения";
        }
        return null;
    }
}
