<?php 
require_once __DIR__ . '/classes/user.php';
require_once __DIR__ . '/classes/vip_User.php';

$users = [
    $user1 = new User('name_user_1','surname1',20),
    $user2 = new User('name_user_2','surname2',20),
    $vip_user1 = new vip_user('VipName_user_1','Vip_surname2',20,3),
    $vip_user2 = new vip_user('VipName_user_2','Vip_surname2',20,8),

];

//user 1 data input
$user1->setPhone(184891232198);
$user1->setAddresses('via dell\'impendenza 25','city_1',21188,'Italy');
$user1->setAddresses('via della repubblica 125','city_4',22665,'Italy');
$user1->setAddresses('via del papa 22','city_1',18138,'Vaticano');

//user 2 data input
$user2->setPhone(183923231238);
$user2->setAddresses('via dell\'impendenza 25','city_1',21188,'Italy');
$user2->setAddresses('via della repubblica 125','city_4',22665,'Italy');
$user2->setAddresses('via del papa 22','city_1',18138,'Vaticano');


//vip-user 1 data input

$vip_user1->setPhone(3331915);
$vip_user1->setAddresses('via dell\'impendenza 25','city_1',21188,'Italy');
$vip_user1->setAddresses('via della repubblica 125','city_4',22665,'Italy');
$vip_user1->setAddresses('via del papa 22','city_1',18138,'Vaticano');


//Vip-user 2 data input
$vip_user2->setPhone(18453484498);
$vip_user2->setAddresses('via dell\'impendenza 25','city_1',21188,'Italy');
$vip_user2->setAddresses('via della repubblica 125','city_4',22665,'Italy');




var_dump($users);

?>