<?php
/**
 * Created by PhpStorm.
 * User: kpa
 * Date: 07/06/16
 * Time: 0:34
 */


require_once '../vendor/autoload.php';

use Simplon\Mysql\Manager\SqlManager;

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
    'unixSocket' => '/opt/lampp/var/mysql/mysql.sock',
);

// standard setup
$dbh = new \Simplon\Mysql\Mysql(
    $config['host'],
    $config['user'],
    $config['password'],
    $config['database']
);
$sqlManager = new \Simplon\Mysql\Manager\SqlManager($dbh);
$query = 'SELECT * FROM BRANCH WHERE BRANCH = :bId ';

//$query = 'SELECT * FROM events WHERE venue_id = :venueId LIMIT 10';

$conds = array('bId' => 1);
// ############################################


echo '<h3>fetchValue</h3>';

$sqlBuilder = (new \Simplon\Mysql\Manager\SqlQueryBuilder())
    ->setQuery($query)
    ->setConditions($conds);

$sqlManager = new \Simplon\Mysql\Manager\SqlManager($dbh);
$result = $sqlManager->fetchRow($sqlBuilder);
echo '<h4>total rows: ' . $sqlManager->getRowCount() . '</h4>';
var_dump($result);


$sqlManager = new \Simplon\Mysql\Manager\SqlManager($dbh);



echo '<h4>total rows: ' . $sqlManager->getRowCount() . '</h4>';
var_dump($result);