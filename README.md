# mepost-sdk

## Overview
The `mepost-sdk` is a PHP library designed to simplify interactions with the Mepost API for sending and managing emails.

## Installation
Install this package using composer:
```bash
composer require mepost/mepost-sdk-php
```

## Usage
Here is a quick example:

```php
use Mepost\Sdk\Client;

$client = new Client("your_api_key")
$response = $client->sendEmail($emailData);
```
