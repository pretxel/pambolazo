<?php

return array(

	

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => __DIR__.'/../database/production.sqlite',
			'prefix'   => '',
		),

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'pambolazodb',
			'username'  => 'root',
			'password'  => 'root',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
			'port'		=> '3310'
		),

		'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => 'scrape',
			'username' => 'postgres',
			'password' => 'root',
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		),

		'sqlsrv' => array(
			'driver'   => 'sqlsrv',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'prefix'   => '',
		),
		'mongodb' => array(
    		'driver'   => 'mongodb',
    		'host'     => 'localhost',
    		'port'     => 27017,
    		'username' => 'siteUserAdmin',
    		'password' => 'password',
    		'database' => 'pambolazoDB'
		)

	),

	

	),

);