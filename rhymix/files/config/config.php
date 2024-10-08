<?php
// Rhymix System Configuration
return array(
	'config_version' => '2.0',
	'db' => array(
		'master' => array(
			'type' => 'mysql',
			'host' => 'localhost',
			'port' => '3306',
			'user' => 'hcvacance',
			'pass' => 'xcrew1!@',
			'database' => 'hcvacance',
			'prefix' => 'rx_',
			'charset' => 'utf8mb4',
			'engine' => 'innodb',
		),
	),
	'cache' => array(
		'type' => NULL,
		'ttl' => 86400,
		'servers' => array(),
		'truncate_method' => 'delete',
	),
	'ftp' => array(
		'host' => 'localhost',
		'port' => 21,
		'path' => NULL,
		'user' => NULL,
		'pass' => NULL,
		'pasv' => true,
		'sftp' => false,
	),
	'crypto' => array(
		'encryption_key' => 'orUDF5yT7uRAY5my7yUKjSVT9OQjS0d6k2UbF7IYKLH1debOHukjAOMapuIF4FNM',
		'authentication_key' => 'hJvDEbUhdhyxHCxuMfclh7bzIO8kgOyzgsZT3atFU9ftWH2JisvUUDfnxytMQQ7T',
		'session_key' => 'MLjkgbpskZvGgCMO2Ngdpz6UL2JEmOVhN18jvdNz1HU5L8pe2vLCNWWIf0jjykdh',
	),
	'locale' => array(
		'default_lang' => 'ko',
		'enabled_lang' => array(
			'ko',
		),
		'auto_select_lang' => false,
		'default_timezone' => 'Asia/Seoul',
		'internal_timezone' => 32400,
	),
	'url' => array(
		'default' => 'https://hcvacance.co.kr/rhymix/',
		'unregistered_domain_action' => 'display',
		'http_port' => NULL,
		'https_port' => NULL,
		'ssl' => 'always',
		'rewrite' => 1,
	),
	'session' => array(
		'delay' => false,
		'use_db' => false,
		'use_keys' => false,
		'use_ssl' => false,
		'use_ssl_cookies' => false,
		'domain' => NULL,
		'path' => NULL,
		'lifetime' => 0,
		'refresh' => 300,
	),
	'file' => array(
		'folder_structure' => 2,
		'umask' => '0022',
	),
	'mail' => array(
		'type' => 'mailfunction',
	),
	'view' => array(
		'manager_layout' => 'module',
		'minify_scripts' => 'common',
		'concat_scripts' => 'none',
		'server_push' => false,
		'use_gzip' => false,
	),
	'admin' => array(
		'allow' => array(),
		'deny' => array(),
	),
	'lock' => array(
		'locked' => false,
		'title' => 'Maintenance',
		'message' => '',
		'allow' => array(),
	),
	'debug' => array(
		'enabled' => true,
		'log_slow_queries' => 0.25,
		'log_slow_triggers' => 0.25,
		'log_slow_widgets' => 0.25,
		'log_slow_remote_requests' => 1.25,
		'log_filename' => NULL,
		'display_type' => array(
			'comment',
		),
		'display_content' => array(
			'request_info',
			'entries',
			'errors',
			'queries',
		),
		'display_to' => 'admin',
		'query_comment' => false,
		'write_error_log' => 'fatal',
		'allow' => array(),
	),
	'seo' => array(
		'main_title' => '',
		'subpage_title' => '',
		'document_title' => '',
		'og_enabled' => false,
		'og_extract_description' => false,
		'og_extract_images' => false,
		'og_extract_hashtags' => false,
		'og_use_nick_name' => false,
		'og_use_timestamps' => false,
	),
	'mediafilter' => array(
		'whitelist' => array(),
		'classes' => array(),
	),
	'security' => array(
		'robot_user_agents' => array(),
		'check_csrf_token' => false,
		'nofollow' => false,
	),
	'mobile' => array(
		'enabled' => true,
		'tablets' => false,
		'viewport' => 'width=device-width, initial-scale=1.0, user-scalable=yes',
	),
	'use_rewrite' => true,
	'use_sso' => false,
	'other' => array(),
);
