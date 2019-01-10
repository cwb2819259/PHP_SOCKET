<?php 
	//例子中的参数不记得可以翻阅上面进行阅读
	//设置地址和端口
	$address = '127.0.0.1';
	$port    = 666;
	//确保PHP在等待客户端连接时不会超时
	set_time_limit(0); 
	//创建服务器端socket套接字。
	$socket  = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

	//在套接字上绑定地址与端口
	if(socket_bind($socket, $address,$port) == false){
		echo 'servce bind fali :'.socket_strerror(socket_last_error()).PHP_EOL;
	}else{
		echo 'servce bind success'.PHP_EOL;
	}
	//进行监听
	if(socket_listen($socket) == false){
		echo 'servce listen fail：'.socket_strerror(socket_last_error()).PHP_EOL;
	}else{
		echo 'servce listen success'.PHP_EOL;
	}
	//下面我们进行挂起，使得服务器端可以随时接收到请求
	do{
		//等待连接请求,接收绑定的客户端发来的信息
		$accept_resource = socket_accept($socket);
		if($accept_resource !==false){
			//读取客户端发来的信息，转化为字符串。
			$resource = socket_read($accept_resource, 1024);
			echo 'receive:'.$resource.PHP_EOL;
			$resource = str_replace(PHP_EOL,'',$resource);
			if($resource !== false){//这里可以根据你搜需要的业务进行判断
				if($resource == '1')
				//给客户端返回想要传输的数据
					$return = 'you are client';
				else if($resource == '2')
					$return = 'you are client1';
				else
					$return = 'i donot known huo you are';
				socket_write($accept_resource,$return,strlen($return));

			}else{
				echo 'read fail';
			}
		}
	}
	//使得服务器端挂起
	while(true);
	//关闭连接
	socket_close($socket);
?>