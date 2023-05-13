<?php

namespace Delivery\Modules\Base\Models\Schemas\Constants;

class BaseConstants
{
    const DEFAULT_USER = 1;

    const LIMIT = 10;

    const STR_RANDOM = 10;

    const TOKEN = 'token';

    const DOT = '.';

    const NULL = '';

    const ALL_SLUGS = [
        self::DEFAULT_USER,
        self::LIMIT,
        self::TOKEN,
        self::STR_RANDOM,
        self::DOT,
        self::NULL,
    ];
}
