<?php

namespace Delivery\Modules\Deliver\Models\Schemas\Constants;

class DeliverConstants
{
    const PREFIX = 'api/v1/auth';

    const ROUTE = '/routes/api.php';

    const CONTROLLER = 'DeepCopy\\Modules\\Deliver\\Http\\Controllers';

    const ALL_SLUGS = [
        self::PREFIX,
        self::ROUTE,
        self::CONTROLLER,
    ];
}
