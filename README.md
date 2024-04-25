Mepost PHP SDK
==============

This PHP library provides an easy interface to the Mepost API, enabling users to send emails, manage scheduled messages, and retrieve information about specific messages efficiently.

Features
--------

-   Send emails directly and through predefined templates.
-   Manage scheduled messages: retrieve, cancel, and query.
-   Extensive support for different email operations.

Installation
------------

You can install the Mepost PHP SDK via Composer. Run the following command:

```php
composer require mepost/mepost-sdk-php
```

Make sure your PHP version is 7.4 or higher to ensure compatibility.

Usage
-----

### Initializing a Client

Create a client instance using your Mepost API key:


```php
require_once 'vendor/autoload.php';

use Mepost\Sdk\Client;

$client = new Client('your_api_key_here');
```

### Sending an Email

To send an email:

```php
$emailData = [
    "from_email" => "info@example.com",
    "subject" => "Test Email",
    "text" => "This is a test email sent from the Mepost PHP SDK.",
    "to" => [
        ["email" => "recipient@example.com"]
    ]
];

$response = $client->sendEmail($emailData);
echo "Email sent response: ";
print_r($response);
```

### Managing Scheduled Messages

To get information about a scheduled message:

```php
$scheduleId = "your_schedule_id";
$emailInfo = $client->getScheduledMessage($scheduleId);
echo "Scheduled Message Info: ";
print_r($emailInfo);
```

Available Methods
-----------------

Here are the methods provided by the Mepost PHP SDK:

### `sendEmail($emailData)`

-   Description: Sends an email with the provided details.
-   Parameters:
    -   `$emailData`: An associative array containing email fields such as `from_email`, `subject`, `text`, and `to`.

### `sendEmailByTemplate($emailData, $templateId)`

-   Description: Sends an email using a specific template.
-   Parameters:
    -   `$emailData`: An associative array containing the email details.
    -   `$templateId`: The ID of the template used for sending the email.

### `getInfo($scheduleId, $email)`

-   Description: Retrieves information about a specific scheduled message.
-   Parameters:
    -   `$scheduleId`: The ID of the scheduled message.
    -   `$email`: The email address associated with the message.

### `cancelScheduledMessage($scheduledMessageId)`

-   Description: Cancels a scheduled message.
-   Parameters:
    -   `$scheduledMessageId`: The ID of the message to cancel.

### `getScheduledMessage($scheduleId)`

-   Description: Retrieves a scheduled message.
-   Parameters:
    -   `$scheduleId`: The ID of the scheduled message.

Contributing
------------

Contributions to the Mepost PHP SDK are welcome. Please feel free to fork the repository, make your changes, and submit a pull request.

License
-------

This SDK is distributed under the MIT License. See the LICENSE file in the repository for more information.
