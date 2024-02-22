<?php

namespace Dmytrotus\LaravelCurrencyConverter\Contracts;

interface ConverterInterface
{
    public function convert(float $amount, string $fromCurrency, string $toCurrency): float;
}
