## 关于毕业设计

------

### 2017 年1月13日

```matlab
% Summary
- 测试了request 可以通过cookie得到页面。
但是默认没有运行js代码。
- BeautifulSoup可以实现以前在pyspider上的所有功能！
```



***BeautifulSoup属于内容的解析工具，应该再找一款合适的网页爬取工具，包括能够通过post登录之类的。***

找到了一个叫Request的第三方库。功能据说比官方库urllib2要强大

#### Beautiful Soup  初体验

决定试一试beautiful soup看文档简介觉得挺简单的。。。

试试看能不能用它来满足自己做爬虫的需求。

```python
#在Mac上 用
#pip install beautifulsoup4 就成功安装上了。也没有发现需要装什么依赖。
#发现需要单独安装html的解析器。  按照官方文档推荐用pip install lxml 安装lxml解析器。
安装也很顺利的成功了。没有像以前在windows下安装一样会报错。应该是windows默认没有装C库吧。

```

- 一些beautifulSoup的学习笔记

  ```python
  from bs4 import BeautifulSoup
  soup=BeautifulSoup("传入html的内容")
  #BeautifulSoup这个函数会把传入的html解析成一些python的对象。
  soup.a  #就是Tag 对象 是第一个a标签
  #测试 通过urllib2 这个模块来打开一个网页读取全部网页内容
  import urllib2 as paw #给它起个别名叫爪子
  address="http://www.tristan.pub"
  response＝paw.urlopen(address)
  html＝response.read()#读取网页的内容。
  ```

  ​

#### Resquests 初体验

先下载。同样是用

> pip install requests

木有依赖库，直接搞定。不得不说用Python和类Linux系统真的会多活好多年！

项目的一小步先解决post登录的问题

想自动登录知乎，在知乎上搜到一个代码后。发现不能复制粘贴。傻傻的从源代码

里面找到那段代码拷贝下来再用浏览器打开。然后又调代码格式。

调完了之后忽然想到，直接禁用js不久可以了么。。。。于是禁用js试了一下果然可以。

> 然后又发现作者留了Github里面还有12月份最新更新的版本。。。

```python
测试结果
简单通过刚才扒的代码生成了一个cookie
通过requests 的session.cookies.load()函数载入cookie
然后可以成功的用session.get()函数来访问知乎了。
```





------

### 2017 年 1月6日

毕设的题目是做一个基于网络爬虫的内容推荐系统。几个系统的设想如下

- ***定向网站内容推荐***

通过scrapy 编写spiders对几个固定的站点内容进行采集。然后对用户进行推荐

- ***RSS爬虫***

编写爬虫爬取符合RSS标准的站点，并对数据进行存储，推荐

- ***类似搜索引擎的爬虫***

只对网页进行索引不对内容进行存储。全网爬取，对用户推荐网址。