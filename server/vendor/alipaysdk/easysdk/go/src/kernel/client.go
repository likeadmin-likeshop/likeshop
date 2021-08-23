package kernel


import (
	"tea"
)

type AlipayOpenApiGenericResponse struct {
	HttpBody *string `json:"http_body" xml:"http_body" require:"true"`
	Code *string `json:"code" xml:"code" require:"true"`
	Msg *string `json:"msg" xml:"msg" require:"true"`
	SubCode *string `json:"sub_code" xml:"sub_code" require:"true"`
	SubMsg *string `json:"sub_msg" xml:"sub_msg" require:"true"`
}

func (s AlipayOpenApiGenericResponse) String() string {
	return tea.Prettify(s)
}

func (s AlipayOpenApiGenericResponse) GoString() string {
	return s.String()
}

func (s *AlipayOpenApiGenericResponse) SetHttpBody(v string) *AlipayOpenApiGenericResponse {
	s.HttpBody = &v
	return s
}

func (s *AlipayOpenApiGenericResponse) SetCode(v string) *AlipayOpenApiGenericResponse {
	s.Code = &v
	return s
}

func (s *AlipayOpenApiGenericResponse) SetMsg(v string) *AlipayOpenApiGenericResponse {
	s.Msg = &v
	return s
}

func (s *AlipayOpenApiGenericResponse) SetSubCode(v string) *AlipayOpenApiGenericResponse {
	s.SubCode = &v
	return s
}

func (s *AlipayOpenApiGenericResponse) SetSubMsg(v string) *AlipayOpenApiGenericResponse {
	s.SubMsg = &v
	return s
}

func NewClient()(*Client, error) {
	client := new(Client)
	err := client.Init()
	return client, err
}

func (client *Client)Init()(_err error) {
	return nil
}


func Execute(method string, textParams map[string]string, bizParams map[string]string) (_result *AlipayOpenApiGenericResponse, _err error) {
	_runtime := map[string]interface{}{
		"connectTimeout": 15000,
		"readTimeout": 15000,
		"retry": map[string]int{
			"maxAttempts": 0,
		},
	}

	_resp := &AlipayOpenApiGenericResponse{}
	for _retryTimes := 0; tea.AllowRetry(_runtime["retry"], _retryTimes); _retryTimes++ {
		if _retryTimes > 0 {
			_backoffTime := tea.GetBackoffTime(_runtime["backoff"], _retryTimes)
			if _backoffTime > 0 {
				tea.Sleep(_backoffTime)
			}
		}

		_resp, _err = func()(*AlipayOpenApiGenericResponse, error){
			request_ := tea.NewRequest()
			systemParams := map[string]string{
				"method": method,
				"app_id": GetConfig("appId"),
				"timestamp": GetTimestamp(),
				"format": "json",
				"version": "1.0",
				"alipay_sdk": GetSdkVersion(),
				"charset": "UTF-8",
				"sign_type": GetConfig("signType"),
				"app_cert_sn": GetMerchantCertSN(),
				"alipay_root_cert_sn": GetAlipayRootCertSN(),
			}
			request_.Protocol = GetConfig("protocol")
			request_.Method = "POST"
			request_.Pathname = "/gateway.do"
			request_.Headers = map[string]string{
				"host": GetConfig("gatewayHost"),
				"content-type": "application/x-www-form-urlencoded;charset=utf-8",
			}
			request_.Query = SortMap(tea.Merge(map[string]string{
				"sign": Sign(systemParams, bizParams, textParams, GetConfig("merchantPrivateKey")),
			},systemParams,
				textParams))
			request_.Body = tea.ToReader(ToUrlEncodedRequestBody(bizParams))
			response_, _err := tea.DoRequest(request_, _runtime)
			if _err != nil {
				return nil, _err
			}
			respMap, _err := ReadAsJson(response_.Body, method)
			if _err != nil {
				return nil, _err
			}

			if IsCertMode() {
				if Verify(respMap, ExtractAlipayPublicKey(GetAlipayCertSN(respMap))) {
					_result = &AlipayOpenApiGenericResponse{}
					_body := ToRespModel(respMap)
					_err = tea.Convert(_body, &_result)
					return _result, _err
				}

			} else {
				if Verify(respMap, GetConfig("alipayPublicKey")) {
					_result = &AlipayOpenApiGenericResponse{}
					_body := ToRespModel(respMap)
					_err = tea.Convert(_body, &_result)
					return _result, _err
				}

			}

			_err = tea.NewSDKError(map[string]interface{}{
				"message": "验签失败，请检查支付宝公钥设置是否正确。",
			})
			return nil, _err
		}()
		if !tea.Retryable(_err) {
			break
		}
	}

	return _resp, _err
}