<?php

namespace Dmytrotus\LaravelCurrencyConverter;

use Exception;

class CurrencyRatesCalculator
{
    public function getRate(string $fromCurrency, string $toCurrency): float
    {
        $key = strtoupper($fromCurrency . $toCurrency);

        if (!array_key_exists($key, $this->ratesTable())) {
            throw new Exception('The currency is not present.');
        }

        return $this->ratesTable()[$key];
    }

    /**
     * Return the array of rates for different currencies
     * In Future ** make table in DB with rates
     * In Future ** Get current rates from api https://exchangeratesapi.io/
     * @return array<string, float>
     */
    private function ratesTable(): array
    {
        return [
            'EURPLN' => 4.3147,
            'EURUSD' => 1.0855,
        ];
    }
}
