<?php

declare(strict_types=1);

namespace SmitBackend\TokenMeter;

use SmitBackend\TokenMeter\Contracts\QuotaLimiterInterface;

/**
 * Class TokenMeterProxy
 *
 * @package SmitBackend\TokenMeter
 */
class TokenMeterProxy implements QuotaLimiterInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
