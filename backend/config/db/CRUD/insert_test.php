<?php
/**
 * Created by PhpStorm.
 * User: KPA
 * Date: 07/06/16
 * Time: 0:39
 */

require_once '../../../vendor/autoload.php';
require_once'../../conf.php';
use Simplon\Mysql\Crud\CrudManager;
$data = array(
    'BRANCH'=>1,
    'ID'=>'12345',
    'NAMA'=>'Muller Shopie',
    'Tanggal'=>'16 april 2016',
    'EMAIL'=>'muller@restora.com',
    'kasir'
);

/*
$sqlBuilder = new \Simplon\Mysql\Manager\SqlQueryBuilder();
$sqlBuilder->setTableName('USER')->setData($data);
$id = $sqlManager->insert($sqlBuilder);
var_dump($id); */

//syntax insert('namatabel',data);
$id=$dbh->insert('USER',$data);
var_dump($id); // 50 || bool