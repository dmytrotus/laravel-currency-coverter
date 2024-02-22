<?php

namespace Dmytrotus\LaravelCurrencyConverter;

use Dmytrotus\LaravelCurrencyConverter\Contracts\ConverterInterface;
use Dmytrotus\LaravelCurrencyConverter\CurrencyRatesCalculator;

class CurrencyConverter implements ConverterInterface
{
    private $currencyCalc;

    public function init(): string
    {
        return 'hello world from currency converter package';
    }

    public function convert(float $amount, string $fromCurrency, string $toCurrency): float
    {
        $this->currencyCalc = new CurrencyRatesCalculator();
        $rate = $this->currencyCalc->getRate($fromCurrency, $toCurrency);

        return $amount * $rate;
    }
}
