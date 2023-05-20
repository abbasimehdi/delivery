<?php

namespace App\Constants;

class BaseConstants
{
    const PASSWORD = 'password';

    const PASSWORD_VALUE = '12345678';

    const LOGIN = '/login';

    const AUTH_LOGIN = 'auth.login';

    const HOME = '/home';

    const EMAIL = 'email';
    const CITIES = 'admin/cities';

    const ALL_SLUGS = [
        self::PASSWORD,
        self::PASSWORD_VALUE,
        self::HOME,
        self::LOGIN,
        self::AUTH_LOGIN,
        self::EMAIL,
        self::CITIES,
    ];
}
