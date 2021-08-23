English | [简体中文](/README-zh-CN.md)


# Alibaba Cloud Client for PHP
[![Latest Stable Version](https://poser.pugx.org/alibabacloud/client/v/stable)](https://packagist.org/packages/alibabacloud/client)
[![composer.lock](https://poser.pugx.org/alibabacloud/client/composerlock)](https://packagist.org/packages/alibabacloud/client)
[![Total Downloads](https://poser.pugx.org/alibabacloud/client/downloads)](https://packagist.org/packages/alibabacloud/client)
[![License](https://poser.pugx.org/alibabacloud/client/license)](https://packagist.org/packages/alibabacloud/client)
[![codecov](https://codecov.io/gh/aliyun/openapi-sdk-php-client/branch/master/graph/badge.svg)](https://codecov.io/gh/aliyun/openapi-sdk-php-client)
[![Travis Build Status](https://travis-ci.org/aliyun/openapi-sdk-php-client.svg?branch=master)](https://travis-ci.org/aliyun/openapi-sdk-php-client)
[![Appveyor Build Status](https://ci.appveyor.com/api/projects/status/qb8j3lhg8349k0hk/branch/master?svg=true)](https://ci.appveyor.com/project/aliyun/openapi-sdk-php-client/branch/master)


![](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)


Alibaba Cloud Client for PHP is a client tool that helps PHP developers manage credentials and send requests, [Alibaba Cloud SDK for PHP][SDK] dependency on this tool.


## Online Demo
[API Explorer](https://api.aliyun.com) provides the ability to call the cloud product OpenAPI online, and dynamically generate SDK Example code and quick retrieval interface, which can significantly reduce the difficulty of using the cloud API.


## Prerequisites
Your system will need to meet the [Prerequisites](/docs/en-US/0-Prerequisites.md), including having PHP >= 5.5. We highly recommend having it compiled with the cURL extension and cURL 7.16.2+.


## Installation
If Composer is already [installed globally on your system](https://getcomposer.org/doc/00-intro.md#globally), run the following in the base directory of your project to install Alibaba Cloud Client for PHP as a dependency:
```
composer require alibabacloud/client
```
> Some users may not be able to install due to network problems, you can try to switch the Composer mirror.

Please see the [Installation](/docs/en-US/1-Installation.md) for more detailed information about installing the Alibaba Cloud Client for PHP through Composer and other means.


## Quick Examples
Before you begin, you need to sign up for an Alibaba Cloud account and retrieve your [Credentials](https://usercenter.console.aliyun.com/#/manage/ak).

### Create Client
```php
<?php

use AlibabaCloud\Client\AlibabaCloud;

AlibabaCloud::accessKeyClient('accessKeyId', 'accessKeySecret')->asDefaultClient();
```


## Request
> Request styles are divided into `ROA` and `RPC`. Different product styles are different. Please refer to the product documentation before using. It is recommended to use [Alibaba cloud SDK for PHP][SDK], the details have been encapsulated, and you do not need to care about the style.


### ROA Request
```php
<?php

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

try {
    $result = AlibabaCloud::roa()
                          ->regionId('cn-hangzhou') // Specify the requested regionId, if not specified, use the client regionId, then default regionId
                          ->product('CS') // Specify product
                          ->version('2015-12-15') // Specify product version
                          ->action('DescribeClusterServices') // Specify product interface
                          ->serviceCode('cs') // Set ServiceCode for addressing, optional
                          ->endpointType('openAPI') // Set type, optional
                          ->method('GET') // Set request method
                          ->host('cs.aliyun.com') // Location Service will not be enabled if the host is specified. For example, service with a Certification type-Bearer Token should be specified
                          ->pathPattern('/clusters/[ClusterId]/services') // Specify path rule with ROA-style
                          ->withClusterId('123456') // Assign values to parameters in the path. Method: with + Parameter
                          ->request(); // Make a request and return to result object. The request is to be placed at the end of the setting
                          
    print_r($result->toArray());
    
} catch (ClientException $exception) {
    print_r($exception->getErrorMessage());
} catch (ServerException $exception) {
    print_r($exception->getErrorMessage());
}
```

### RPC Request
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


## Documentation
* [Prerequisites](/docs/en-US/0-Prerequisites.md)
* [Installation](/docs/en-US/1-Installation.md)
* [Client & Credentials](/docs/en-US/2-Client.md)
* [Request](/docs/en-US/3-Request.md)
* [Result](/docs/en-US/4-Result.md)
* [Region](/docs/en-US/5-Region.md)
* [Host](/docs/en-US/6-Host.md)
* [SSL Verify](/docs/en-US/7-Verify.md)
* [Debug](/docs/en-US/8-Debug.md)
* [Log](/docs/en-US/9-Log.md)
* [Test](/docs/en-US/10-Test.md)


## Issues
[Opening an Issue](https://github.com/aliyun/openapi-sdk-php-client/issues/new/choose), Issues not conforming to the guidelines may be closed immediately.


## Changelog
Detailed changes for each release are documented in the [release notes](/CHANGELOG.md).


## Contribution
Please make sure to read the [Contributing Guide](/CONTRIBUTING.md) before making a pull request.


## References
* [Alibaba Cloud Regions & Endpoints][endpoints]
* [OpenAPI Explorer][open-api]
* [Packagist][packagist]
* [Composer][composer]
* [Guzzle Documentation][guzzle-docs]
* [Latest Release][latest-release]


## License
[Apache-2.0](/LICENSE.md)

Copyright (c) 2009-present, Alibaba Cloud All rights reserved.


[SDK]: https://github.com/aliyun/openapi-sdk-php
[open-api]: https://api.alibabacloud.com
[latest-release]: https://github.com/aliyun/openapi-sdk-php-client
[guzzle-docs]: http://docs.guzzlephp.org/en/stable/request-options.html
[composer]: https://getcomposer.org
[packagist]: https://packagist.org/packages/alibabacloud/sdk
[home]: https://home.console.aliyun.com
[alibabacloud]: https://www.alibabacloud.com
[regions]: https://www.alibabacloud.com/help/doc-detail/40654.html
[endpoints]: https://developer.aliyun.com/endpoints
[cURL]: http://php.net/manual/en/book.curl.php
[OPCache]: http://php.net/manual/en/book.opcache.php
[xdebug]: http://xdebug.org
[OpenSSL]: http://php.net/manual/en/book.openssl.php
[client]: https://github.com/aliyun/openapi-sdk-php-client
