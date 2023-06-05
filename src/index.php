<?php
ini_set('display_errors', 1);
require_once __DIR__ . '/../vendor/autoload.php';
$sqlQueryBuilder = new Builder\QueryBuilder();

$sql = $sqlQueryBuilder->table('users')
    ->select(['first_name', 'age'])
    ->where(['status' => 'active'])
    ->order(['id' => 'ASC'])
    ->limit(10)
    ->offset(1)
    ->getSql();
$db = new Builder\Db();
$db->query($sql);