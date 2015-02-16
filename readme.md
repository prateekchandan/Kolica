## Shop Store

#To install on server via FTP

1. Move the contents to any folder outside your public_html folder named as folder_name
2. Copy the public folder in the project to public_html folder
3. open index.php and change these lines 
    require __DIR__.'/../bootstrap/autoload.php';
    require_once __DIR__.'/../bootstrap/start.php';

    to 

   require __DIR__.'/../folder_name/bootstrap/autoload.php';
   require_once __DIR__.'/../folder_name/bootstrap/start.php';

4. Database setup
	i. Go to config/database.php and edit these settings appropriately
		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'databasename',
			'username'  => 'username',
			'password'  => 'password',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
	ii. Import schema.sql to your database

The App is ready to GO :)