<?php

namespace App\Libraries;

class CIAuth
{
    /**
     * Sets the CIAuth session or authentication state.
     *
     * @param mixed $result The user data to store in the session.
     * @return void
     */
    public static function setCIAuth(array $user): void
    {
        session()->set([
            'logged_in' => true,
            'admindata' => $user
        ]);
    }

    public static function id(): ?int
    {
        return self::check() ? session('admindata.id') : null;
    }

    public static function check(): bool
    {
        return session()->has('logged_in');
    }

    public static function forget(): void
    {
        session()->remove(['logged_in', 'admindata']);
    }

    public static function admin(): ?array
    {
        return self::check() ? session('admindata') : null;
    }
}
