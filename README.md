
# Mepost PHP SDK

The `mepost-sdk` is a PHP library designed to simplify interactions with the Mepost API. It provides convenient methods to send and manage messages efficiently. This SDK is perfect for developers looking to integrate Mepost messaging capabilities into their applications.

## Features

- Send emails directly through the Mepost API.
- Schedule and manage email deliveries.
- Retrieve detailed information about scheduled messages.
- Cancel scheduled messages.
- Send emails using predefined templates.

## Installation

To install the `mepost-sdk` for PHP, you can use Composer. If you don't have Composer installed, you can download it from [getcomposer.org](https://getcomposer.org/).

Run the following command to install the SDK:

```bash
composer require mepost/mepost-sdk-php
```

## Usage

Here is a quick example to get you started:

```php
<?php

require 'vendor/autoload.php';

use Mepost\Client\MepostClient;
use Mepost\Config\MepostConfig;

// Initialize the Mepost client
$apiKey = 'your_api_key_here';
$config = new MepostConfig($apiKey);
$client = new MepostClient($config);

// Send an email
$emailData = [
    'from_email' => 'info@example.com',
    'from_name' => 'Example Company',
    'html' => 'This is a test email sent from the Mepost PHP SDK.',
    'subject' => 'Example Subject',
    'to' => [
        ['email' => 'recipient1@example.com'],
        ['email' => 'recipient2@example.com']
    ]
];

$response = $client->sendEmail($emailData);
print_r($response);
```

## API Methods

### `MepostClient($config)`

Initializes and returns a new instance of MepostClient.

- Parameters
  - `$config`: Configuration object with your Mepost API key.

### Company Endpoints

#### `addDomain(AddDomainRequest $request)`

Adds a domain to the Mepost account.

- Parameters
  - `$request`: An object containing the domain to add.

#### `getDomainList()`

Retrieves a list of domains associated with the Mepost account.

- No parameters.

#### `removeDomain(RemoveDomainRequest $request)`

Removes a domain from the Mepost account.

- Parameters
  - `$request`: An object containing the domain to remove.

### Groups Endpoints

#### `listGroups($limit = 10, $page = 1)`

Retrieves a list of email groups.

- Parameters
  - `$limit`: The maximum number of groups to return (default: 10).
  - `$page`: The page number for pagination (default: 1).

#### `createGroup(CreateNewGroupRequest $request)`

Creates a new email group.

- Parameters
  - `$request`: An object containing the details of the new group.

#### `deleteGroup($groupId)`

Deletes an email group.

- Parameters
  - `$groupId`: The ID of the group to delete.

#### `getGroupById($groupId)`

Retrieves information about a specific email group.

- Parameters
  - `$groupId`: The ID of the group to retrieve.

#### `updateGroup($groupId, RenameGroupRequest $request)`

Updates the name of an email group.

- Parameters
  - `$groupId`: The ID of the group to update.
  - `$request`: An object containing the new group name.

### Subscribers Endpoints

#### `listSubscribers($groupId, $limit = 10, $page = 1)`

Retrieves a list of subscribers in a group.

- Parameters
  - `$groupId`: The ID of the group.
  - `$limit`: The maximum number of subscribers to return (default: 10).
  - `$page`: The page number for pagination (default: 1).

#### `addSubscriber($groupId, CreateSubscriberRequest $request)`

Adds a subscriber to a group.

- Parameters
  - `$groupId`: The ID of the group.
  - `$request`: An object containing subscriber details.

#### `deleteSubscriber($groupId, DeleteSubscriberRequest $request)`

Deletes a subscriber from a group.

- Parameters
  - `$groupId`: The ID of the group.
  - `$request`: An object containing the emails of subscribers to delete.

#### `getSubscriberByEmail($groupId, $email)`

Retrieves subscriber details by email.

- Parameters
  - `$groupId`: The ID of the group.
  - `$email`: The email address of the subscriber.

### Messages Endpoints

#### `getMessageInfo($scheduleId, $email)`

Retrieves information about a specific scheduled message.

- Parameters
  - `$scheduleId`: The ID of the scheduled message.
  - `$email`: The email address to which the message was sent.

#### `cancelScheduledMessage(CancelScheduledMessageRequest $request)`

Cancels a scheduled message.

- Parameters
  - `$request`: An object containing the scheduled message ID.

#### `sendMarketing(SendMarketingRequest $request)`

Sends a marketing email.

- Parameters
  - `$request`: An object for sending marketing emails.

#### `sendMessageByTemplate(SendMessageByTemplateRequest $request)`

Sends an email using a template.

- Parameters
  - `$request`: An object containing the message details and template ID.

#### `getScheduleInfo($scheduleId)`

Retrieves schedule information for a specific scheduled message.

- Parameters
  - `$scheduleId`: The ID of the scheduled message.

#### `sendTransactional(SendTransactionalRequest $request)`

Sends a transactional email.

- Parameters
  - `$request`: An object for sending transactional emails.

#### `sendTransactionalByTemplate(SendMessageByTemplateRequest $request)`

Sends a transactional email using a template.

- Parameters
  - `$request`: An object containing the message details and template ID.

### Outbound IP Endpoints

#### `createIpGroup(CreateIpGroupRequest $request)`

Creates a new IP group.

- Parameters
  - `$request`: An object containing the IP group details.

#### `getIpGroupInfo($name)`

Retrieves information about a specific IP group.

- Parameters
  - `$name`: The name of the IP group.

#### `listIpGroups()`

Retrieves a list of all IP groups.

- No parameters.

#### `cancelWarmup(CancelWarmUpRequest $request)`

Cancels a warmup process for an IP address.

- Parameters
  - `$request`: An object containing the IP address.

#### `getIpInfo($ip)`

Retrieves information about a specific IP address.

- Parameters
  - `$ip`: The IP address to retrieve.

#### `listIps()`

Retrieves a list of all IP addresses.

- No parameters.

#### `setIpGroup(SetIpGroupRequest $request)`

Assigns an IP address to a specific IP group.

- Parameters
  - `$request`: An object containing the IP address and group details.

#### `startWarmup(StartWarmUpRequest $request)`

Starts a warmup process for an IP address.

- Parameters
  - `$request`: An object containing the IP address.

## Contributing

Contributions are always welcome! Please read the contributing guide for ways to contribute to this project.

## License

`mepost-sdk` is released under the MIT License. See the LICENSE file for more details.
