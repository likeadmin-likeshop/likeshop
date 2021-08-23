[![Latest Stable Version](https://poser.pugx.org/alipaysdk/easysdk/v/stable)](https://packagist.org/packages/alipaysdk/easysdk)
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Falipay%2Falipay-easysdk.svg?type=shield)](https://app.fossa.com/projects/git%2Bgithub.com%2Falipay%2Falipay-easysdk?ref=badge_shield)

欢迎使用 Alipay **Easy** SDK for Go 。

Alipay Esay SDK for Go让您不用复杂编程即可访支付宝开放平台开放的各项常用能力，SDK可以自动帮您满足能力调用过程中所需的证书校验、加签、验签、发送HTTP请求等非功能性要求。

下面向您介绍Alipay Easy SDK for Go 的基本设计理念和使用方法。

## 设计理念

Alipay Easy SDK主要目标是提升开发者在**服务端**集成支付宝开放平台开放的各类核心能力的效率。

## 环境要求
1. Alipay Easy SDK for Go 需要配合`Go 1.12`或其以上版本。

2. 使用 Alipay Easy SDK for Go 之前 ，您需要先前往[支付宝开发平台-开发者中心](https://openhome.alipay.com/platform/developerIndex.htm)完成开发者接入的一些准备工作，包括创建应用、为应用添加功能包、设置应用的接口加签方式等。

3. 准备工作完成后，注意保存如下信息，后续将作为使用SDK的输入。

* 加签模式为公钥证书模式时（推荐）

`AppId`、`应用的私钥`、`应用公钥证书文件`、`支付宝公钥证书文件`、`支付宝根证书文件`

* 加签模式为公钥模式时

`AppId`、`应用的私钥`、`支付宝公钥`

## 安装
手动下载go目录下源码集成即可

## 快速使用
以下这段代码示例向您展示了使用Alipay Easy SDK for Go调用一个API的3个主要步骤：

1. 设置参数（全局只需设置一次）。
2. 发起API调用。
3. 处理响应或异常。

```go
package main

import (
	"encoding/json"
	"fmt"
	"kernel"
	"time"
)

func init() {
	account:= kernel.Client{}
	account.Protocol = "https"
	account.GatewayHost = "openapi.alipay.com"
	account.AppId = "<-- 请填写您的AppId，例如：2019022663440152 -->"
	account.SignType = "RSA2"
	account.AlipayPublicKey = "<-- 请填写您的支付宝公钥，例如：MIIBIjANBg... -->"
	account.MerchantPrivateKey = "<-- 请填写您的应用私钥，例如：MIIEvQIBADANB ... ... -->"

	kernel.InitClient(account)
}


func main() {
	result, _ := kernel.Execute("alipay.trade.create", nil, getBizParams(time.Now().Format("2006-01-02 15:04:05")))
	fmt.Println(result)
}

func getBizParams(outTradeNo string) map[string]string {
	bizParams := map[string]string{
		"subject":       "phone6 16G",
		"out_trade_no":  outTradeNo,
		"total_amount":  "0.10",
		"buyer_id":      "2088002656718920",
		"extend_params": getHuabeiParams(),
	}
	return bizParams
}

func getHuabeiParams() string {
	extendParams := map[string]string{
		"hb_fq_num":            "3",
		"hb_fq_seller_percent": "3",
	}
	byt, _ := json.Marshal(extendParams)
	return string(byt)
}
```

## 文档

[Alipay Easy SDK](./../README.md)
