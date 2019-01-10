<?php 
	$address = '127.0.0.1';
	$port    = 666;
	//设置无限请求超时时间
	set_time_limit(0); 
	//创建服务器端socket套接字。
	$socket  = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
	socket_connect($socket, $address,$port);
	echo 'connect success'.PHP_EOL;
	$return = '2'.PHP_EOL;
	socket_write($socket, $return , strlen($return));
	$msg = socket_read($socket, 1024);
	echo 'resource:'.$msg.PHP_EOL;
	socket_close($socket);
	echo "close OK\n";
?>