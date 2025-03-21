<?php

declare(strict_types=1);

namespace SmitBackend\TokenMeter\Contracts;

/**
 * Interface QuotaLimiterInterface
 *
 * @package SmitBackend\TokenMeter
 */
interface QuotaLimiterInterface
{
    public function execute(array $payload = []): mixed;
}
