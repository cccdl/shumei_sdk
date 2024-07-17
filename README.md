# 数美 SDK for PHP  !

### 主要新特性

* 数美SDK FOR PHP
* 集成数美常用接口【陆续更新中】
* 调用简单，统一原样返回

### 更新日志
- 1.0.0 增加文字识别接口

## 安装

> 运行环境要求PHP7.1+。

```shell
$ composer require cccdl/shumei_sdk
```

### 接口对应文件

| 文件       |方法| 说明   |
|----------|---|------|
| Text.php |`discern()`| 文字识别 |


### 快速使用

在您开始之前，您需要注册数美并获取您的[凭证](https://www.ishumei.com/?utm_source=bdpp_web&utm_medium=biaoti)。

```php
<?php

use cccdl\shumei_sdk\Im\User;

$text = (new Text($appKey, $appSecrt))->setRegion('sh')->discern();

$res = $text->('100001');
```

## 文档

[数美文档中心](https://help.ishumei.com/)

## 问题

[提交 Issue](https://github.com/cccdl/shumei_sdk/issues)，不符合指南的问题可能会立即关闭。

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/cccdl/shumei_sdk/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/cccdl/shumei_sdk/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and
PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT
