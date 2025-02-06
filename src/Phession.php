<?php

namespace Silviooosilva\Phession;

class Phession
{

    /**
        * Phession constructor
        * @return void
    **/
    public function __construct()
    {
        if(!session_id()) {
            session_start();
        }
    }

    /**
        * Start the session with a lifetime
        * @param mixed $lifetime
        * @return void
    **/
    public static function start(mixed $sessionLifetime = 3600): void
    {
        session_start([
            'cookie_lifetime' => $sessionLifetime,
        ]);
    }

    /**
        * Set a session value
        * @param string $key
        * @param mixed $value
        * @return bool
    **/
    public static function set(string $sessionKey, mixed $sessionValue): bool
    {
        $_SESSION[$sessionKey] = $sessionValue;
        return true;
    }

    /**
        * Get a session value
        * @param string $key
        * @return mixed
    **/

    public static function get(string $sessionKey): mixed
    {
        return $_SESSION[$sessionKey];
    }


    /**
        * Verify if a session key exists
        * @param string $sessionKey
        * @return bool
    **/
    public static function has(string $sessionKey): bool
    {
        return isset($_SESSION[$sessionKey]);
    }

    /**
        * Unset a session key
        * @param string $sessionKey
        * @return bool
    **/

    public static function unset(string $sessionKey): bool
    {
        unset($_SESSION[$sessionKey]);
        return true;
    }

    /**
        * Destroy the session
        * @return bool
    **/

    public static function destroy(): bool
    {
        if(session_status() === PHP_SESSION_ACTIVE){
            return session_destroy();
        }
        return false;
    }

    /**
        * Return all session values
        * @return array | bool
    **/
    public static function all(): array | bool
    {
        return isset($_SESSION) ? $_SESSION : false;
    }
}
