## 日志系统架构

------

#### 2017-1-6

- 修改scp为git 自动同步文件夹

  出现的问题。在PHP端不能通过exec执行git merge 操作 。经过排查

  发现是用户权限的问题。PHP-fpm默认的用户是apache是不能执行通过其他用户创建的git操作的 通过www.conf调整了PHP-fpm的用户之后。问题解决。

------

#### 2017-1-5

- mac 使用Typora 写出md文件
- python脚本转化日志目录下的md文件生成html
- python脚本对html文件上传到阿里云服务器
- 服务器端PHP动态require文件组成网页

