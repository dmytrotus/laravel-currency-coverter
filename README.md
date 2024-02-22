# Laravel currency converter
Package which allows to convert currency. Will be improved in future.

```php
<?php

$converter = new Dmytrotus\LaravelCurrencyConverter\CurrencyConverter();

echo $converter->convert(1, 'eur', 'pln');
```