<?php

use App\QueryBuilder;

$db = new QueryBuilder();

$users = $db->getAll('users');
$user = $db->getOne('users', '1');


var_dump($user);

//$db->insert(['name' => 'dsfsdf', "email" => "sdf@sdfdsf.ru"], 'users');

//$db->update([
//    'name' => 'Rusik222',
//    'email' => 'email222'
//], 'users', '1');

//$db->delete('users', '2');