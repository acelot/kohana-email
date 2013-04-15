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