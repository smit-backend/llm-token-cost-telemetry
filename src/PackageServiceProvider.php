<?php

declare(strict_types=1);

namespace SmitBackend\TokenMeter;

use SmitBackend\TokenMeter\Contracts\QuotaLimiterInterface;

class PackageServiceProvider
{
    public function register(): void
    {
        // Bind core service singleton
    }

    public function boot(): void
    {
        // Boot routes and configuration publishing
    }
}
