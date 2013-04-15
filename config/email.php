<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	Kohana::DEVELOPMENT => array
	(
		'example' => array(
			'driver'     => 'smtp',
			'hostname'   => 'smtp.domain.tld',
			'username'   => 'example@domain.tld',
			'password'   => '123456'
		)
	),
	Kohana::PRODUCTION  => array
	(
		'example' => array(
			'driver'     => 'smtp',
			'hostname'   => 'smtp.domain.tld',
			'username'   => 'example@domain.tld',
			'password'   => '123456'
		)
	),
);
