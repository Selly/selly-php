# Selly PHP

## Installation

Install the library using [Composer](https://getcomposer.org). Please refer to the [Composer documentation](https://getcomposer.org/doc/01-basic-usage.md) if you are unfamiliar with Composer.

Execute:

    $ composer require selly/selly-php

## Usage

Visit the [API documentation](https://developer.selly.gg/?php) for complete method lists

```php
<?php

include __DIR__.'/vendor/autoload.php';
use \Selly as Selly;

Selly\Client::authenticate('your account email', 'your api key');

// Get orders
$orders = Selly\Orders::list();
?>
```

## License

The library is available as open source under the terms of the [MIT License](http://opensource.org/licenses/MIT).
