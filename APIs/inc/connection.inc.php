<?php

$connect_error = 'Could not connect';
$mysql_host = 'ec2-184-73-174-10.compute-1.amazonaws.com';
$mysql_user = 'sgmxjreazdlahd';
$mysql_pass = '559213071084f9efd5b3cc7266d5f56bd692374e682f6d3efc2056c8264d3abd';
$mysql_data = 'de1kl6ikd8g8ne';


function get_mysql_connection() {
	if(@!$connection = mysqli_connect($mysql_host , $mysql_user , $mysql_pass ,$mysql_data))
		die($connect_error);
	return $connection;
}
