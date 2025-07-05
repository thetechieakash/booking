<?php

namespace App\Libraries;

class CiUser
{
    public static function setCIUser(array $user): void
    {
        session()->set([
            'user_logged_in' => true,
            'userData' => $user,
        ]);
    }

    public static function id(): ?int
    {
        return self::check() ? session('userData.id') : null;
    }

    public static function check(): bool
    {
        return session()->has('user_logged_in') && session('user_logged_in') === true;
    }

    public static function forget(): void
    {
        session()->remove(['user_logged_in', 'userData']);
    }

    public static function user(): ?array
    {
        return self::check() ? session('userData') : null;
    }
}
