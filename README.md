Kohana Email module
============

Kohana 3.3 email module (using Swift Mailer 4.3)

## How to install
Put all files into `modules/email` directory and enable module in `bootstrap.php`:
```php
Kohana::modules(array(
	...
	'email' => MODPATH.'email',
	...
));
```

## Using
Simple use case - send 1 message to 1 address:
```php
$message = array(
	'subject' => 'First message',
	'body'    => 'Hello, world!',
	'from'    => array('user@domain.tld' => 'John Doe'),
	'to'      => 'anotheruser@domain.tld'
);

$code = Email::send('support', $message['subject'], $message['body'], $message['from'], $message['to']);
));
```

## Advanced using
If you want more options, use the full power of Swift_Mailer
```php
$mailer = Email::instance();

// your code using $mailer->...
```