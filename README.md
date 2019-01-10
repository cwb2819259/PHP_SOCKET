### PHP_SOCKET实例
---

##### <font color=#009944 size=2>实例操作</font>
---

1、先使用命令行模式运行socket_server.php,如果运行报错请检查php是否在环境变量中。

2、然后运行socket_client.php、socket_client1.php就看看到socket通讯建立。

---

#### php socket函数介绍
```php
socket_accept() 接收一个socket连接
socket_bind() 把socket绑定在一个IP地址和端口上
socket_clear_error() 清除socket的错误或者最后的错误代码
socket_close() 关闭一个socket资源
socket_connect() 开始一个socket连接
socket_create_listen() 在指定端口打开一个socket监听
socket_create_pair() 产生一对没有区别的socket到一个数组里
socket_create() 产生一个socket，相当于产生一个socket的数据结构
socket_get_option() 获取socket选项
socket_getpeername() 获取远程类似主机的ip地址
socket_getsockname() 获取本地socket的ip地址
socket_iovec_add() 添加一个新的向量到一个分散/聚合的数组
socket_iovec_alloc() 这个函数创建一个能够发送接收读写的iovec数据结构
socket_iovec_delete() 删除一个已经分配的iovec
socket_iovec_fetch() 返回指定的iovec资源的数据
socket_iovec_free() 释放一个iovec资源
socket_iovec_set() 设置iovec的数据新值
socket_last_error() 获取当前socket的最后错误代码
socket_listen() 监听由指定socket的所有连接
socket_read() 读取指定长度的数据
socket_readv() 读取从分散/聚合数组过来的数据
socket_recv() 从socket里结束数据到缓存
socket_recvfrom() 接受数据从指定的socket，如果没有指定则默认当前socket
socket_recvmsg() 从iovec里接受消息
socket_select() 多路选择
socket_send() 这个函数发送数据到已连接的socket
socket_sendmsg() 发送消息到socket
socket_sendto() 发送消息到指定地址的socket
socket_set_block() 在socket里设置为块模式
socket_set_nonblock() socket里设置为非块模式
socket_set_option() 设置socket选项
socket_shutdown() 这个函数允许你关闭读、写、或者指定的socket
socket_strerror() 返回指定错误号的详细错误
socket_write() 写数据到socket缓存
socket_writev() 写数据到分散/聚合数组
```