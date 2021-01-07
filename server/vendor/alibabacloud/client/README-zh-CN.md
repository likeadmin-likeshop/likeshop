[English](/README.md) | 简体中文


# Alibaba Cloud Client for PHP
[![Latest Stable Version](https://poser.pugx.org/alibabacloud/client/v/stable)](https://packagist.org/packages/alibabacloud/client)
[![composer.lock](https://poser.pugx.org/alibabacloud/client/composerlock)](https://packagist.org/packages/alibabacloud/client)
[![Total Downloads](https://poser.pugx.org/alibabacloud/client/downloads)](https://packagist.org/packages/alibabacloud/client)
[![License](https://poser.pugx.org/alibabacloud/client/license)](https://packagist.org/packages/alibabacloud/client)
[![codecov](https://codecov.io/gh/aliyun/openapi-sdk-php-client/branch/master/graph/badge.svg)](https://codecov.io/gh/aliyun/openapi-sdk-php-client)
[![Travis Build Status](https://travis-ci.org/aliyun/openapi-sdk-php-client.svg?branch=master)](https://travis-ci.org/aliyun/openapi-sdk-php-client)
[![Appveyor Build Status](https://ci.appveyor.com/api/projects/status/qb8j3lhg8349k0hk/branch/master?svg=true)](https://ci.appveyor.com/project/aliyun/openapi-sdk-php-client/branch/master)


![](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)


Alibaba Cloud Client for PHP 是帮助 PHP 开发者管理凭据、发送请求的客户端工具，[Alibaba Cloud SDK for PHP][SDK] 由本工具提供底层支持。


## 在线示例
[API Explorer](https://api.aliyun.com) 提供在线调用阿里云产品，并动态生成 SDK 代码和快速检索接口等能力，能显著降低使用云 API 的难度。


## 先决条件
您的系统需要满足[先决条件](/docs/zh-CN/0-Prerequisites.md)，包括 PHP> = 5.5。 我们强烈建议使用cURL扩展，并使用TLS后端编译cURL 7.16.2+。


## 安装依赖
如果已在系统上[全局安装 Composer](https://getcomposer.org/doc/00-intro.md#globally)，请直接在项目目录中运行以下内容来安装 Alibaba Cloud Client for PHP 作为依赖项：
```
composer require alibabacloud/client
```
> 一些用户可能由于网络问题无法安装，可以使用[阿里云 Composer 全量镜像](https://developer.aliyun.com/composer)。

请看[安装](/docs/zh-CN/1-Installation.md)有关通过 Composer 和其他方式安装的详细信息。


## 快速使用
在您开始之前，您需要注册阿里云帐户并获取您的[凭证](https://usercenter.console.aliyun.com/#/manage/ak)。

```php
<?php

use AlibabaCloud\Client\AlibabaCloud;

AlibabaCloud::accessKeyClient('accessKeyId', 'accessKeySecret')->asDefaultClient();
```


## 请求
> 请求风格分为 `ROA` 和 `RPC`，不同产品风格不同，使用前，请参考产品文档。推荐使用 [Alibaba Cloud SDK for PHP][SDK] ，细节已被封装，无需关心风格。


### ROA 请求
```php
<?php

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

try {
    $result = AlibabaCloud::roa()
                          ->regionId('cn-hangzhou') // 指定请求的区域，不指定则使用客户端区域、默认区域
                          ->product('CS') // 指定产品
                          ->version('2015-12-15') // 指定产品版本
                          ->action('DescribeClusterServices') // 指定产品接口
                          ->serviceCode('cs') // 设置 ServiceCode 以备寻址，非必须
                          ->endpointType('openAPI') // 设置类型，非必须
                          ->method('GET') // 指定请求方式
                          ->host('cs.aliyun.com') // 指定域名则不会寻址，如认证方式为 Bearer Token 的服务则需要指定
                          ->pathPattern('/clusters/[ClusterId]/services') // 指定ROA风格路径规则
                          ->withClusterId('123456') // 为路径中参数赋值，方法名：with + 参数
                          ->request(); // 发起请求并返回结果对象，请求需要放在设置的最后面

    print_r($result->toArray());
    
} catch (ClientException $exception) {
    print_r($exception->getErrorMessage());
} catch (ServerException $exception) {
    print_r($exception->getErrorMessage());
}
```

### RPC 请求
```php
<?php

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

try {
    $result = AlibabaCloud::rpc()
                          ->product('Cdn')
                          ->version('2014-11-11')
                          ->action('DescribeCdnService')
                          ->method('POST')
                          ->request();

    print_r($result->toArray());

} catch (ClientException $exception) {
    print_r($exception->getErrorMessage());
} catch (ServerException $exception) {
    print_r($exception->getErrorMessage());
}
```


## 文档
* [先决条件](/docs/zh-CN/0-Prerequisites.md)
* [安装](/docs/zh-CN/1-Installation.md)
* [客户端和凭证](/docs/zh-CN/2-Client.md)
* [请求](/docs/zh-CN/3-Request.md)
* [结果](/docs/zh-CN/4-Result.md)
* [区域](/docs/zh-CN/5-Region.md)
* [域名](/docs/zh-CN/6-Host.md)
* [SSL 验证](/docs/zh-CN/7-Verify.md)
* [调试](/docs/zh-CN/8-Debug.md)
* [日志](/docs/zh-CN/9-Log.md)
* [测试](/docs/zh-CN/10-Test.md)


## 问题
[提交 Issue](https://github.com/aliyun/openapi-sdk-php-client/issues/new/choose)，不符合指南的问题可能会立即关闭。


## 发行说明
每个版本的详细更改记录在[发行说明](/CHANGELOG.md)中。


## 贡献
提交 Pull Request 之前请阅读[贡献指南](/CONTRIBUTING.md)。


## 相关
* [阿里云服务 Regions & Endpoints][endpoints]
* [OpenAPI Explorer][open-api]
* [Packagist][packagist]
* [Composer][composer]
* [Guzzle中文文档][guzzle-docs]
* [最新源码][latest-release]


## 许可证
[Apache-2.0](/LICENSE.md)

Copyright (c) 2009-present, Alibaba Cloud All rights reserved.


[SDK]: https://github.com/aliyun/openapi-sdk-php
[open-api]: https://api.aliyun.com
[latest-release]: https://github.com/aliyun/openapi-sdk-php-client
[guzzle-docs]: https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html
[composer]: https://getcomposer.org
[packagist]: https://packagist.org/packages/alibabacloud/sdk
[home]: https://home.console.aliyun.com
[aliyun]: https://www.aliyun.com
[regions]: https://help.aliyun.com/document_detail/40654.html
[endpoints]: https://developer.aliyun.com/endpoints
[cURL]: http://php.net/manual/zh/book.curl.php
[OPCache]: http://php.net/manual/zh/book.opcache.php
[xdebug]: http://xdebug.org
[OpenSSL]: http://php.net/manual/zh/book.openssl.php
[client]: https://github.com/aliyun/openapi-sdk-php-client
