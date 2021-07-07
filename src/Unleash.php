<?php

namespace Rikudou\Unleash;

use Rikudou\Unleash\Configuration\Context;
use Rikudou\Unleash\DTO\Variant;

interface Unleash
{
    public const SDK_VERSION = '1.1.0';

    public function isEnabled(string $featureName, ?Context $context = null, bool $default = false): bool;

    public function getVariant(string $featureName, ?Context $context = null, ?Variant $fallbackVariant = null): Variant;

    public function register(): bool;
}
