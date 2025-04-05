<?php

namespace Eventify\core;

class Session
{
    private static ?self $instance = null;

    private function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function destroy(): void
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_destroy();
            $_SESSION = [];
        }
    }

    public static function get(string $key, mixed $default = ''): mixed
    {
        return $_SESSION[$key] ?? $default;
    }

    public static function set(string $key, mixed $value): void
    {
        $_SESSION[$key] = $value;
    }

    public static function setAuthCookie(): void
    {
        $authToken = self::generateAuthToken();

        setcookie(
            "auth_token",
            $authToken,
            [
                'expires' => time() + (86400 * 30),
                'path' => '/',
                'secure' => true,
                'httponly' => true,
                'samesite' => 'Strict'
            ]
        );
    }

    private static function generateAuthToken(int $length = 32): string
    {
        return bin2hex(random_bytes($length / 2));
    }
}

?>
