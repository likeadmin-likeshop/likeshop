package kernel

import (
	"encoding/base64"
	"encoding/json"
	"fmt"
	"io"
	"io/ioutil"
	Sort "sort"
	"strings"
	"tea"
	"time"
)

var this Client

func GetConfig(key string) string {
	if key == "protocol" {
		return this.Protocol
	} else if key == "gatewayHost" {
		return this.GatewayHost
	} else if key == "appId" {
		return this.AppId
	} else if key == "signType" {
		return this.SignType
	} else if key == "alipayPublicKey" {
		return this.AlipayPublicKey
	} else if key == "merchantPrivateKey" {
		return this.MerchantPrivateKey
	} else if key == "merchantCertPath" {
		return this.MerchantCertPath
	} else if key == "alipayCertPath" {
		return this.AlipayCertPath
	} else if key == "alipayRootCertPath" {
		return this.AlipayRootCertPath
	} else if key == "notifyUrl" {
		return this.NotifyUrl
	} else if key == "encryptKey" {
		return this.EncryptKey
	} else {
		panic(key + " is illegal")
	}
}

func InitClient(config Client) {
	this = config
}

/**
获取时间戳，格式yyyy-MM-dd HH:mm:ss
*/
func GetTimestamp() string {
	return time.Now().Format("2006-01-02 15:04:05")
}

func GetSdkVersion() string {
	return sdkVersion
}

func GetMerchantCertSN() string {
	return this.MerchantCertSN
}

func GetAlipayCertSN(alipayCertSN map[string]string) string {
	return this.AlipayCertSN
}

func GetAlipayRootCertSN() string {
	return this.AlipayRootCertSN
}

func ExtractAlipayPublicKey(alipayPublicKey string) string {
	return this.AlipayCertSN
}

func IsCertMode() bool {
	if len(this.AlipayCertSN) != 0 {
		return true
	} else {
		return false
	}
}

/**
将业务参数和其他额外文本参数按www-form-urlencoded格式转换成HTTP Body中的字节数组，注意要做URL Encode
*/
func ToUrlEncodedRequestBody(bizParams map[string]string) string {
	sortedMap := getSortedMap(nil, bizParams, nil)
	if sortedMap == nil {
		return ""
	}
	return buildQueryString(bizParams)
}

func buildQueryString(sortedMap map[string]string) string {
	requestUrl := ""
	keys := make([]string, 0)
	for k, _ := range sortedMap {
		keys = append(keys, k)
	}
	Sort.Strings(keys)
	var pList = make([]string, 0, 0)
	for _, key := range keys {
		pList = append(pList, key+"="+sortedMap[key])
	}
	requestUrl = strings.Join(pList, "&")
	return requestUrl
}

func getSortedMap(systemParams map[string]string, bizParams map[string]string, textParams map[string]string) map[string]string {
	sortedMap := tea.Merge(systemParams, bizParams, textParams)
	sortedMap = SortMap(sortedMap)
	return sortedMap
}

func SortMap(romanNumeralDict map[string]string) map[string]string {
	keys := make([]string, 0)
	for k, _ := range romanNumeralDict {
		keys = append(keys, k)
	}
	Sort.Strings(keys)
	return romanNumeralDict
}

/**
计算签名
*/
func Sign(systemParams map[string]string, bizParams map[string]string, textParams map[string]string, privateKey string) string {
	if bizParams != nil {
		byt, _ := json.Marshal(bizParams)
		bizParams[bizContent] = string(byt)
	}
	sortedMap := getSortedMap(systemParams, bizParams, textParams)
	data := buildQueryString(sortedMap)
	var prvKey = formatKey(privateKey, `-----BEGIN RSA PRIVATE KEY-----`, `-----END RSA PRIVATE KEY-----`, 64)
	signData := RsaSignWithSha256([]byte(data), prvKey)
	return base64.StdEncoding.EncodeToString(signData)
}

func Verify(respMap map[string]string, alipayPublicKey string) bool {
	resp := respMap[bodyField]
	method := respMap[methodField]
	content, sign := getSignSourceData(resp, method)
	signBytes, err := base64.StdEncoding.DecodeString(sign)
	if err != nil {
		return false
	}
	pubKey := formatKey(alipayPublicKey, `-----BEGIN PUBLIC KEY-----`, `-----END PUBLIC KEY-----`, 64)
	result := RsaVerySignWithSha256([]byte(content), signBytes, pubKey)
	return result
}

func getSignSourceData(body string, method string) (content string, sign string) {
	var rootNodeName = strings.Replace(method, ".", "_", -1) + response
	var rootIndex = strings.LastIndex(body, rootNodeName)
	var errorIndex = strings.LastIndex(body, errorResponse)
	if rootIndex > 0 {
		return parserJSONSource(body, rootNodeName, rootIndex)
	} else if errorIndex > 0 {
		return parserJSONSource(body, errorResponse, errorIndex)
	} else {
		return "", ""
	}
}

func parserJSONSource(responseContent string, nodeName string, nodeIndex int) (content string, sign string) {
	signDataStartIndex := nodeIndex + len(nodeName) + 2
	signIndex := 0
	if strings.LastIndex(responseContent, alipayCertSN) > 0 {
		signIndex = strings.LastIndex(responseContent, "\""+alipayCertSN+"\"")
	} else {
		signIndex = strings.LastIndex(responseContent, "\""+signField+"\"")
	}
	signDataEndIndex := signIndex - 1
	indexLen := signDataEndIndex - signDataStartIndex
	if indexLen < 0 {
		return "", ""
	}
	content = responseContent[signDataStartIndex:signDataEndIndex]
	sign = responseContent[signIndex+8 : len(responseContent)-2]
	return content, sign
}

func ToRespModel(resp map[string]string) map[string]interface{} {
	body := resp[bodyField]
	method := resp[methodField]
	content, _ := getSignSourceData(body, method)
	result := map[string]interface{}{
		bodyField: body,
	}
	arg := make(map[string]interface{})
	err := json.Unmarshal([]byte(content), &arg)
	tmp := make(map[string]string)
	err = json.Unmarshal([]byte(content), &tmp)
	if err == nil {
		for key, value := range arg {
			if value != "" {
				result[key] = value
			}
		}
	}
	return result
}

/**
解析网关响应内容，同时将API的接口名称和响应原文插入到响应数组的method和body字段中
*/
func ReadAsJson(response io.Reader, method string) (map[string]string, error) {
	byt, err := ioutil.ReadAll(response)
	if err != nil {
		return nil, err
	}
	err = json.Unmarshal(byt, response)
	result := map[string]string{
		bodyField:   string(byt),
		methodField: method,
	}
	return result, err
}

func AesDecrypt(cipherText string, encryptKey string) {
	de:=AESDecrypt([]byte(cipherText), []byte(encryptKey))
	fmt.Println(de)
}

func AesEncrypt(plainText string, encryptKey string) {
	en := AESEncrypt([]byte(plainText), []byte(encryptKey))
	fmt.Println(en)
}

type Client struct {
	Protocol           string
	GatewayHost        string
	AppId              string
	SignType           string
	AlipayPublicKey    string
	MerchantPrivateKey string
	MerchantCertPath   string
	AlipayCertPath     string
	AlipayRootCertPath string
	NotifyUrl          string
	EncryptKey         string
	MerchantCertSN     string
	AlipayCertSN       string
	AlipayRootCertSN   string
}
