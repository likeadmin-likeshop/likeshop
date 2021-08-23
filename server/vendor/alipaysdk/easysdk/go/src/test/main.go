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