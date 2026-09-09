<?php
#[\AllowDynamicProperties]
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => '127.0.0.1',
		'login' => 'root',
		'password' => 'root',
		'database' => 'cakephp_test',
		'prefix' => ''
	);

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => '127.0.0.1',
		'login' => 'root',
		'password' => 'root',
		'database' => 'cakephp_test',
		'prefix' => ''
	);

	public $test2 = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => '127.0.0.1',
		'login' => 'root',
		'password' => 'root',
		'database' => 'cakephp_test2',
		'prefix' => ''
	);

	public $test_database_three = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => '127.0.0.1',
		'login' => 'root',
		'password' => 'root',
		'database' => 'cakephp_test3',
		'prefix' => ''
	);

	public function __construct() {
		$host = getenv('DB_HOST');
		if ($host === false || $host === '') {
			return;
		}
		foreach (array('default', 'test', 'test2', 'test_database_three') as $source) {
			$this->{$source}['host'] = $host;
		}
	}
}
