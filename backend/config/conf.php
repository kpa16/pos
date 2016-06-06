<?php
$config = array(
    // required credentials

    'host'       => 'localhost',
    'user'       => 'root',
    'password'   => '',
    'database'   => 'mydb',

    // optional

    'fetchMode'  => \PDO::FETCH_ASSOC,
    'charset'    => 'utf8',
    'port'       => 3306,
	//kalo pake unix kalo windows di kosongin
    'unixSocket' => '/opt/lampp/var/mysql/mysql.sock',
);

// standard setup
$dbh = new \Simplon\Mysql\Mysql(
    $config['host'],
    $config['user'],
    $config['password'],
    $config['database']
);
?>
