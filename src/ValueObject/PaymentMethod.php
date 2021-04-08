<?php

declare(strict_types=1);

namespace Skrill\ValueObject;

use Skrill\Exception\InvalidPaymentMethodException;
use Skrill\ValueObject\Traits\ValueToStringTrait;

final class PaymentMethod
{
    use ValueToStringTrait;

    public function __construct(string $value)
    {
        $value = trim($value);

        if (!array_key_exists($value, getSkillSupportsPaymentMethods())) {
            throw InvalidPaymentMethodException::invalidValue();
        }

        $this->value = $value;
    }
}
