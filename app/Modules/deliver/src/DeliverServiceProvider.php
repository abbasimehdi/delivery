<?php

namespace Delivery\Modules\Deliver;

use Delivery\Modules\Deliver\Models\Schemas\Constants\DeliverConstants;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class DeliverServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Do something
    }

    /**
     * Publishes configuration file.
     */
    public function boot(): void
    {
        $this->routeRegister();
    }

    protected function routeRegister(): void
    {
        Route::prefix(DeliverConstants::PREFIX)
            ->namespace(DeliverConstants::CONTROLLER)
            ->group(__DIR__.DeliverConstants::ROUTE);
    }
}
