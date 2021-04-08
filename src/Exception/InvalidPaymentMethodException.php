<?php

declare(strict_types=1);

namespace Skrill\Exception;

use Exception;

/**
 * Class InvalidLangException.
 */
final class InvalidPaymentMethodException extends Exception implements SkrillException
{
    /**
     * @return InvalidPaymentMethodException
     */
    public static function invalidValue(): self
    {
        return new self('Not accepted payment method by Skrill.');
    }
}
