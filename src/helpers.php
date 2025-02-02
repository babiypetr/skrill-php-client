<?php

declare(strict_types=1);

if (!function_exists('getSkillSupportsCountries')) {
    /**
     * @return array
     */
    function getSkillSupportsCountries(): array
    {
        return include __DIR__ . '/../resources/iso-3166-1-alpha-3-countries-skill-supports.php';
    }
}

if (!function_exists('getSkillSupportsLanguages')) {
    /**
     * @return array
     */
    function getSkillSupportsLanguages(): array
    {
        return include __DIR__ . '/../resources/iso-6391-languages-skrill-supports.php';
    }
}

if (!function_exists('getSkillSupportsPaymentMethods')) {
    /**
     * @return array
     */
    function getSkillSupportsPaymentMethods(): array
    {
        return include __DIR__ . '/../resources/skrill-payment-methods-support.php';
    }
}
