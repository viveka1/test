<?php
/* Data base details */
$dsn='mysql:host=localhost;dbname=j3'; //DSN
$db_user='root'; //DB username
$db_pass=''; //DB password    
$driver='Joomla'; //Integration driver
$db_prefix='fwybk_'; //prefix used for tables in database
$uid='51d6b0722476a'; //Any random unique number

$PATH = 'freichat/'; // Use this only if you have placed the freichat folder somewhere else
$installed=false; //make it false if you want to reinstall freichat
$admin_pswd='testing'; //backend password 

$debug = false;
$custom_error_handling='NO'; // used during custom installation

$use_cookie=false;

/* email plugin */
$smtp_username = '';
$smtp_password = '';

$force_load_jquery = 'YES';

/* Custom driver */
$usertable='login'; //specifies the name of the table in which your user information is stored.
$row_username='root'; //specifies the name of the field in which the user's name/display name is stored.
$row_userid='loginid'; //specifies the name of the field in which the user's id is stored (usually id or userid)
$avatar_field_name = 'avatar';