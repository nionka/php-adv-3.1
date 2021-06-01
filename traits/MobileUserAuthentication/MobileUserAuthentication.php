<?php
declare(strict_types=1);

namespace traits;

trait MobileUserAuthentication
{
    private string $login = "Vania";
    private string $password = "ololo";

    public function authenticate(string $login, string $password): ?string {
        if ($this->login === $login && $this->password === $password) {
            return "Пользователь мобильного приложения";
        }
        return null;
    }
}
