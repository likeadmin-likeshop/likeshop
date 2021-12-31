<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApi请求参数结构体
 *
 * @method string getServiceId() 获取API 所在的服务唯一 ID。
 * @method void setServiceId(string $ServiceId) 设置API 所在的服务唯一 ID。
 * @method string getServiceType() 获取API 的后端服务类型。支持HTTP、MOCK、TSF、SCF、WEBSOCKET、TARGET（内测）。
 * @method void setServiceType(string $ServiceType) 设置API 的后端服务类型。支持HTTP、MOCK、TSF、SCF、WEBSOCKET、TARGET（内测）。
 * @method integer getServiceTimeout() 获取API 的后端服务超时时间，单位是秒。
 * @method void setServiceTimeout(integer $ServiceTimeout) 设置API 的后端服务超时时间，单位是秒。
 * @method string getProtocol() 获取API 的前端请求协议，支持HTTP和WEBSOCKET。
 * @method void setProtocol(string $Protocol) 设置API 的前端请求协议，支持HTTP和WEBSOCKET。
 * @method ApiRequestConfig getRequestConfig() 获取请求的前端配置。
 * @method void setRequestConfig(ApiRequestConfig $RequestConfig) 设置请求的前端配置。
 * @method string getApiName() 获取用户自定义的 API 名称。
 * @method void setApiName(string $ApiName) 设置用户自定义的 API 名称。
 * @method string getApiDesc() 获取用户自定义的 API 接口描述。
 * @method void setApiDesc(string $ApiDesc) 设置用户自定义的 API 接口描述。
 * @method string getApiType() 获取API 类型，支持NORMAL（普通API）和TSF（微服务API），默认为NORMAL。
 * @method void setApiType(string $ApiType) 设置API 类型，支持NORMAL（普通API）和TSF（微服务API），默认为NORMAL。
 * @method string getAuthType() 获取API 鉴权类型。支持SECRET（密钥对鉴权）、NONE（免鉴权）、OAUTH、APP（应用认证）。默认为NONE。
 * @method void setAuthType(string $AuthType) 设置API 鉴权类型。支持SECRET（密钥对鉴权）、NONE（免鉴权）、OAUTH、APP（应用认证）。默认为NONE。
 * @method boolean getEnableCORS() 获取是否开启跨域。
 * @method void setEnableCORS(boolean $EnableCORS) 设置是否开启跨域。
 * @method array getConstantParameters() 获取常量参数。
 * @method void setConstantParameters(array $ConstantParameters) 设置常量参数。
 * @method array getRequestParameters() 获取前端请求参数。
 * @method void setRequestParameters(array $RequestParameters) 设置前端请求参数。
 * @method string getApiBusinessType() 获取当AuthType 为 OAUTH时，该字段有效， NORMAL：业务api OAUTH：授权API。
 * @method void setApiBusinessType(string $ApiBusinessType) 设置当AuthType 为 OAUTH时，该字段有效， NORMAL：业务api OAUTH：授权API。
 * @method string getServiceMockReturnMessage() 获取API 的后端 Mock 返回信息。如果 ServiceType 是 Mock，则此参数必传。
 * @method void setServiceMockReturnMessage(string $ServiceMockReturnMessage) 设置API 的后端 Mock 返回信息。如果 ServiceType 是 Mock，则此参数必传。
 * @method array getMicroServices() 获取API绑定微服务服务列表。
 * @method void setMicroServices(array $MicroServices) 设置API绑定微服务服务列表。
 * @method TsfLoadBalanceConfResp getServiceTsfLoadBalanceConf() 获取微服务的负载均衡配置。
 * @method void setServiceTsfLoadBalanceConf(TsfLoadBalanceConfResp $ServiceTsfLoadBalanceConf) 设置微服务的负载均衡配置。
 * @method HealthCheckConf getServiceTsfHealthCheckConf() 获取微服务的健康检查配置。
 * @method void setServiceTsfHealthCheckConf(HealthCheckConf $ServiceTsfHealthCheckConf) 设置微服务的健康检查配置。
 * @method array getTargetServices() 获取target类型后端资源信息。（内测阶段）
 * @method void setTargetServices(array $TargetServices) 设置target类型后端资源信息。（内测阶段）
 * @method integer getTargetServicesLoadBalanceConf() 获取target类型负载均衡配置。（内测阶段）
 * @method void setTargetServicesLoadBalanceConf(integer $TargetServicesLoadBalanceConf) 设置target类型负载均衡配置。（内测阶段）
 * @method HealthCheckConf getTargetServicesHealthCheckConf() 获取target健康检查配置。（内测阶段）
 * @method void setTargetServicesHealthCheckConf(HealthCheckConf $TargetServicesHealthCheckConf) 设置target健康检查配置。（内测阶段）
 * @method string getServiceScfFunctionName() 获取scf 函数名称。当后端类型是SCF时生效。
 * @method void setServiceScfFunctionName(string $ServiceScfFunctionName) 设置scf 函数名称。当后端类型是SCF时生效。
 * @method string getServiceWebsocketRegisterFunctionName() 获取scf websocket注册函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method void setServiceWebsocketRegisterFunctionName(string $ServiceWebsocketRegisterFunctionName) 设置scf websocket注册函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method string getServiceWebsocketCleanupFunctionName() 获取scf websocket清理函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method void setServiceWebsocketCleanupFunctionName(string $ServiceWebsocketCleanupFunctionName) 设置scf websocket清理函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method string getServiceWebsocketTransportFunctionName() 获取scf websocket传输函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method void setServiceWebsocketTransportFunctionName(string $ServiceWebsocketTransportFunctionName) 设置scf websocket传输函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method string getServiceScfFunctionNamespace() 获取scf 函数命名空间。当后端类型是SCF时生效。
 * @method void setServiceScfFunctionNamespace(string $ServiceScfFunctionNamespace) 设置scf 函数命名空间。当后端类型是SCF时生效。
 * @method string getServiceScfFunctionQualifier() 获取scf函数版本。当后端类型是SCF时生效。
 * @method void setServiceScfFunctionQualifier(string $ServiceScfFunctionQualifier) 设置scf函数版本。当后端类型是SCF时生效。
 * @method string getServiceWebsocketRegisterFunctionNamespace() 获取scf websocket注册函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method void setServiceWebsocketRegisterFunctionNamespace(string $ServiceWebsocketRegisterFunctionNamespace) 设置scf websocket注册函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method string getServiceWebsocketRegisterFunctionQualifier() 获取scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method void setServiceWebsocketRegisterFunctionQualifier(string $ServiceWebsocketRegisterFunctionQualifier) 设置scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method string getServiceWebsocketTransportFunctionNamespace() 获取scf websocket传输函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method void setServiceWebsocketTransportFunctionNamespace(string $ServiceWebsocketTransportFunctionNamespace) 设置scf websocket传输函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method string getServiceWebsocketTransportFunctionQualifier() 获取scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method void setServiceWebsocketTransportFunctionQualifier(string $ServiceWebsocketTransportFunctionQualifier) 设置scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method string getServiceWebsocketCleanupFunctionNamespace() 获取scf websocket清理函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method void setServiceWebsocketCleanupFunctionNamespace(string $ServiceWebsocketCleanupFunctionNamespace) 设置scf websocket清理函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method string getServiceWebsocketCleanupFunctionQualifier() 获取scf websocket清理函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method void setServiceWebsocketCleanupFunctionQualifier(string $ServiceWebsocketCleanupFunctionQualifier) 设置scf websocket清理函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
 * @method boolean getServiceScfIsIntegratedResponse() 获取是否开启响应集成。当后端类型是SCF时生效。
 * @method void setServiceScfIsIntegratedResponse(boolean $ServiceScfIsIntegratedResponse) 设置是否开启响应集成。当后端类型是SCF时生效。
 * @method boolean getIsDebugAfterCharge() 获取开始调试后计费。（云市场预留字段）
 * @method void setIsDebugAfterCharge(boolean $IsDebugAfterCharge) 设置开始调试后计费。（云市场预留字段）
 * @method boolean getIsDeleteResponseErrorCodes() 获取是否删除自定义响应配置错误码，如果不传或者传 False，不删除，当传 True 时，则删除此 API 所有自定义响应配置错误码。
 * @method void setIsDeleteResponseErrorCodes(boolean $IsDeleteResponseErrorCodes) 设置是否删除自定义响应配置错误码，如果不传或者传 False，不删除，当传 True 时，则删除此 API 所有自定义响应配置错误码。
 * @method string getResponseType() 获取返回类型。
 * @method void setResponseType(string $ResponseType) 设置返回类型。
 * @method string getResponseSuccessExample() 获取自定义响应配置成功响应示例。
 * @method void setResponseSuccessExample(string $ResponseSuccessExample) 设置自定义响应配置成功响应示例。
 * @method string getResponseFailExample() 获取自定义响应配置失败响应示例。
 * @method void setResponseFailExample(string $ResponseFailExample) 设置自定义响应配置失败响应示例。
 * @method ServiceConfig getServiceConfig() 获取API 的后端服务配置。
 * @method void setServiceConfig(ServiceConfig $ServiceConfig) 设置API 的后端服务配置。
 * @method string getAuthRelationApiId() 获取关联的授权API 唯一 ID，当AuthType为OAUTH且ApiBusinessType为NORMAL时生效。标示业务API绑定的oauth2.0授权API唯一ID。
 * @method void setAuthRelationApiId(string $AuthRelationApiId) 设置关联的授权API 唯一 ID，当AuthType为OAUTH且ApiBusinessType为NORMAL时生效。标示业务API绑定的oauth2.0授权API唯一ID。
 * @method array getServiceParameters() 获取API的后端服务参数。
 * @method void setServiceParameters(array $ServiceParameters) 设置API的后端服务参数。
 * @method OauthConfig getOauthConfig() 获取oauth配置。当AuthType是OAUTH时生效。
 * @method void setOauthConfig(OauthConfig $OauthConfig) 设置oauth配置。当AuthType是OAUTH时生效。
 * @method array getResponseErrorCodes() 获取用户自定义错误码配置。
 * @method void setResponseErrorCodes(array $ResponseErrorCodes) 设置用户自定义错误码配置。
 * @method string getTargetNamespaceId() 获取tsf serverless 命名空间ID。（内测中）
 * @method void setTargetNamespaceId(string $TargetNamespaceId) 设置tsf serverless 命名空间ID。（内测中）
 * @method string getUserType() 获取用户类型。
 * @method void setUserType(string $UserType) 设置用户类型。
 * @method boolean getIsBase64Encoded() 获取是否打开Base64编码，只有后端是scf时才会生效。
 * @method void setIsBase64Encoded(boolean $IsBase64Encoded) 设置是否打开Base64编码，只有后端是scf时才会生效。
 */
class CreateApiRequest extends AbstractModel
{
    /**
     * @var string API 所在的服务唯一 ID。
     */
    public $ServiceId;

    /**
     * @var string API 的后端服务类型。支持HTTP、MOCK、TSF、SCF、WEBSOCKET、TARGET（内测）。
     */
    public $ServiceType;

    /**
     * @var integer API 的后端服务超时时间，单位是秒。
     */
    public $ServiceTimeout;

    /**
     * @var string API 的前端请求协议，支持HTTP和WEBSOCKET。
     */
    public $Protocol;

    /**
     * @var ApiRequestConfig 请求的前端配置。
     */
    public $RequestConfig;

    /**
     * @var string 用户自定义的 API 名称。
     */
    public $ApiName;

    /**
     * @var string 用户自定义的 API 接口描述。
     */
    public $ApiDesc;

    /**
     * @var string API 类型，支持NORMAL（普通API）和TSF（微服务API），默认为NORMAL。
     */
    public $ApiType;

    /**
     * @var string API 鉴权类型。支持SECRET（密钥对鉴权）、NONE（免鉴权）、OAUTH、APP（应用认证）。默认为NONE。
     */
    public $AuthType;

    /**
     * @var boolean 是否开启跨域。
     */
    public $EnableCORS;

    /**
     * @var array 常量参数。
     */
    public $ConstantParameters;

    /**
     * @var array 前端请求参数。
     */
    public $RequestParameters;

    /**
     * @var string 当AuthType 为 OAUTH时，该字段有效， NORMAL：业务api OAUTH：授权API。
     */
    public $ApiBusinessType;

    /**
     * @var string API 的后端 Mock 返回信息。如果 ServiceType 是 Mock，则此参数必传。
     */
    public $ServiceMockReturnMessage;

    /**
     * @var array API绑定微服务服务列表。
     */
    public $MicroServices;

    /**
     * @var TsfLoadBalanceConfResp 微服务的负载均衡配置。
     */
    public $ServiceTsfLoadBalanceConf;

    /**
     * @var HealthCheckConf 微服务的健康检查配置。
     */
    public $ServiceTsfHealthCheckConf;

    /**
     * @var array target类型后端资源信息。（内测阶段）
     */
    public $TargetServices;

    /**
     * @var integer target类型负载均衡配置。（内测阶段）
     */
    public $TargetServicesLoadBalanceConf;

    /**
     * @var HealthCheckConf target健康检查配置。（内测阶段）
     */
    public $TargetServicesHealthCheckConf;

    /**
     * @var string scf 函数名称。当后端类型是SCF时生效。
     */
    public $ServiceScfFunctionName;

    /**
     * @var string scf websocket注册函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     */
    public $ServiceWebsocketRegisterFunctionName;

    /**
     * @var string scf websocket清理函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     */
    public $ServiceWebsocketCleanupFunctionName;

    /**
     * @var string scf websocket传输函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     */
    public $ServiceWebsocketTransportFunctionName;

    /**
     * @var string scf 函数命名空间。当后端类型是SCF时生效。
     */
    public $ServiceScfFunctionNamespace;

    /**
     * @var string scf函数版本。当后端类型是SCF时生效。
     */
    public $ServiceScfFunctionQualifier;

    /**
     * @var string scf websocket注册函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     */
    public $ServiceWebsocketRegisterFunctionNamespace;

    /**
     * @var string scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     */
    public $ServiceWebsocketRegisterFunctionQualifier;

    /**
     * @var string scf websocket传输函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     */
    public $ServiceWebsocketTransportFunctionNamespace;

    /**
     * @var string scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     */
    public $ServiceWebsocketTransportFunctionQualifier;

    /**
     * @var string scf websocket清理函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     */
    public $ServiceWebsocketCleanupFunctionNamespace;

    /**
     * @var string scf websocket清理函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     */
    public $ServiceWebsocketCleanupFunctionQualifier;

    /**
     * @var boolean 是否开启响应集成。当后端类型是SCF时生效。
     */
    public $ServiceScfIsIntegratedResponse;

    /**
     * @var boolean 开始调试后计费。（云市场预留字段）
     */
    public $IsDebugAfterCharge;

    /**
     * @var boolean 是否删除自定义响应配置错误码，如果不传或者传 False，不删除，当传 True 时，则删除此 API 所有自定义响应配置错误码。
     */
    public $IsDeleteResponseErrorCodes;

    /**
     * @var string 返回类型。
     */
    public $ResponseType;

    /**
     * @var string 自定义响应配置成功响应示例。
     */
    public $ResponseSuccessExample;

    /**
     * @var string 自定义响应配置失败响应示例。
     */
    public $ResponseFailExample;

    /**
     * @var ServiceConfig API 的后端服务配置。
     */
    public $ServiceConfig;

    /**
     * @var string 关联的授权API 唯一 ID，当AuthType为OAUTH且ApiBusinessType为NORMAL时生效。标示业务API绑定的oauth2.0授权API唯一ID。
     */
    public $AuthRelationApiId;

    /**
     * @var array API的后端服务参数。
     */
    public $ServiceParameters;

    /**
     * @var OauthConfig oauth配置。当AuthType是OAUTH时生效。
     */
    public $OauthConfig;

    /**
     * @var array 用户自定义错误码配置。
     */
    public $ResponseErrorCodes;

    /**
     * @var string tsf serverless 命名空间ID。（内测中）
     */
    public $TargetNamespaceId;

    /**
     * @var string 用户类型。
     */
    public $UserType;

    /**
     * @var boolean 是否打开Base64编码，只有后端是scf时才会生效。
     */
    public $IsBase64Encoded;

    /**
     * @param string $ServiceId API 所在的服务唯一 ID。
     * @param string $ServiceType API 的后端服务类型。支持HTTP、MOCK、TSF、SCF、WEBSOCKET、TARGET（内测）。
     * @param integer $ServiceTimeout API 的后端服务超时时间，单位是秒。
     * @param string $Protocol API 的前端请求协议，支持HTTP和WEBSOCKET。
     * @param ApiRequestConfig $RequestConfig 请求的前端配置。
     * @param string $ApiName 用户自定义的 API 名称。
     * @param string $ApiDesc 用户自定义的 API 接口描述。
     * @param string $ApiType API 类型，支持NORMAL（普通API）和TSF（微服务API），默认为NORMAL。
     * @param string $AuthType API 鉴权类型。支持SECRET（密钥对鉴权）、NONE（免鉴权）、OAUTH、APP（应用认证）。默认为NONE。
     * @param boolean $EnableCORS 是否开启跨域。
     * @param array $ConstantParameters 常量参数。
     * @param array $RequestParameters 前端请求参数。
     * @param string $ApiBusinessType 当AuthType 为 OAUTH时，该字段有效， NORMAL：业务api OAUTH：授权API。
     * @param string $ServiceMockReturnMessage API 的后端 Mock 返回信息。如果 ServiceType 是 Mock，则此参数必传。
     * @param array $MicroServices API绑定微服务服务列表。
     * @param TsfLoadBalanceConfResp $ServiceTsfLoadBalanceConf 微服务的负载均衡配置。
     * @param HealthCheckConf $ServiceTsfHealthCheckConf 微服务的健康检查配置。
     * @param array $TargetServices target类型后端资源信息。（内测阶段）
     * @param integer $TargetServicesLoadBalanceConf target类型负载均衡配置。（内测阶段）
     * @param HealthCheckConf $TargetServicesHealthCheckConf target健康检查配置。（内测阶段）
     * @param string $ServiceScfFunctionName scf 函数名称。当后端类型是SCF时生效。
     * @param string $ServiceWebsocketRegisterFunctionName scf websocket注册函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     * @param string $ServiceWebsocketCleanupFunctionName scf websocket清理函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     * @param string $ServiceWebsocketTransportFunctionName scf websocket传输函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     * @param string $ServiceScfFunctionNamespace scf 函数命名空间。当后端类型是SCF时生效。
     * @param string $ServiceScfFunctionQualifier scf函数版本。当后端类型是SCF时生效。
     * @param string $ServiceWebsocketRegisterFunctionNamespace scf websocket注册函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     * @param string $ServiceWebsocketRegisterFunctionQualifier scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     * @param string $ServiceWebsocketTransportFunctionNamespace scf websocket传输函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     * @param string $ServiceWebsocketTransportFunctionQualifier scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     * @param string $ServiceWebsocketCleanupFunctionNamespace scf websocket清理函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     * @param string $ServiceWebsocketCleanupFunctionQualifier scf websocket清理函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
     * @param boolean $ServiceScfIsIntegratedResponse 是否开启响应集成。当后端类型是SCF时生效。
     * @param boolean $IsDebugAfterCharge 开始调试后计费。（云市场预留字段）
     * @param boolean $IsDeleteResponseErrorCodes 是否删除自定义响应配置错误码，如果不传或者传 False，不删除，当传 True 时，则删除此 API 所有自定义响应配置错误码。
     * @param string $ResponseType 返回类型。
     * @param string $ResponseSuccessExample 自定义响应配置成功响应示例。
     * @param string $ResponseFailExample 自定义响应配置失败响应示例。
     * @param ServiceConfig $ServiceConfig API 的后端服务配置。
     * @param string $AuthRelationApiId 关联的授权API 唯一 ID，当AuthType为OAUTH且ApiBusinessType为NORMAL时生效。标示业务API绑定的oauth2.0授权API唯一ID。
     * @param array $ServiceParameters API的后端服务参数。
     * @param OauthConfig $OauthConfig oauth配置。当AuthType是OAUTH时生效。
     * @param array $ResponseErrorCodes 用户自定义错误码配置。
     * @param string $TargetNamespaceId tsf serverless 命名空间ID。（内测中）
     * @param string $UserType 用户类型。
     * @param boolean $IsBase64Encoded 是否打开Base64编码，只有后端是scf时才会生效。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ServiceTimeout",$param) and $param["ServiceTimeout"] !== null) {
            $this->ServiceTimeout = $param["ServiceTimeout"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RequestConfig",$param) and $param["RequestConfig"] !== null) {
            $this->RequestConfig = new ApiRequestConfig();
            $this->RequestConfig->deserialize($param["RequestConfig"]);
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ApiDesc",$param) and $param["ApiDesc"] !== null) {
            $this->ApiDesc = $param["ApiDesc"];
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("EnableCORS",$param) and $param["EnableCORS"] !== null) {
            $this->EnableCORS = $param["EnableCORS"];
        }

        if (array_key_exists("ConstantParameters",$param) and $param["ConstantParameters"] !== null) {
            $this->ConstantParameters = [];
            foreach ($param["ConstantParameters"] as $key => $value){
                $obj = new ConstantParameter();
                $obj->deserialize($value);
                array_push($this->ConstantParameters, $obj);
            }
        }

        if (array_key_exists("RequestParameters",$param) and $param["RequestParameters"] !== null) {
            $this->RequestParameters = [];
            foreach ($param["RequestParameters"] as $key => $value){
                $obj = new RequestParameter();
                $obj->deserialize($value);
                array_push($this->RequestParameters, $obj);
            }
        }

        if (array_key_exists("ApiBusinessType",$param) and $param["ApiBusinessType"] !== null) {
            $this->ApiBusinessType = $param["ApiBusinessType"];
        }

        if (array_key_exists("ServiceMockReturnMessage",$param) and $param["ServiceMockReturnMessage"] !== null) {
            $this->ServiceMockReturnMessage = $param["ServiceMockReturnMessage"];
        }

        if (array_key_exists("MicroServices",$param) and $param["MicroServices"] !== null) {
            $this->MicroServices = [];
            foreach ($param["MicroServices"] as $key => $value){
                $obj = new MicroServiceReq();
                $obj->deserialize($value);
                array_push($this->MicroServices, $obj);
            }
        }

        if (array_key_exists("ServiceTsfLoadBalanceConf",$param) and $param["ServiceTsfLoadBalanceConf"] !== null) {
            $this->ServiceTsfLoadBalanceConf = new TsfLoadBalanceConfResp();
            $this->ServiceTsfLoadBalanceConf->deserialize($param["ServiceTsfLoadBalanceConf"]);
        }

        if (array_key_exists("ServiceTsfHealthCheckConf",$param) and $param["ServiceTsfHealthCheckConf"] !== null) {
            $this->ServiceTsfHealthCheckConf = new HealthCheckConf();
            $this->ServiceTsfHealthCheckConf->deserialize($param["ServiceTsfHealthCheckConf"]);
        }

        if (array_key_exists("TargetServices",$param) and $param["TargetServices"] !== null) {
            $this->TargetServices = [];
            foreach ($param["TargetServices"] as $key => $value){
                $obj = new TargetServicesReq();
                $obj->deserialize($value);
                array_push($this->TargetServices, $obj);
            }
        }

        if (array_key_exists("TargetServicesLoadBalanceConf",$param) and $param["TargetServicesLoadBalanceConf"] !== null) {
            $this->TargetServicesLoadBalanceConf = $param["TargetServicesLoadBalanceConf"];
        }

        if (array_key_exists("TargetServicesHealthCheckConf",$param) and $param["TargetServicesHealthCheckConf"] !== null) {
            $this->TargetServicesHealthCheckConf = new HealthCheckConf();
            $this->TargetServicesHealthCheckConf->deserialize($param["TargetServicesHealthCheckConf"]);
        }

        if (array_key_exists("ServiceScfFunctionName",$param) and $param["ServiceScfFunctionName"] !== null) {
            $this->ServiceScfFunctionName = $param["ServiceScfFunctionName"];
        }

        if (array_key_exists("ServiceWebsocketRegisterFunctionName",$param) and $param["ServiceWebsocketRegisterFunctionName"] !== null) {
            $this->ServiceWebsocketRegisterFunctionName = $param["ServiceWebsocketRegisterFunctionName"];
        }

        if (array_key_exists("ServiceWebsocketCleanupFunctionName",$param) and $param["ServiceWebsocketCleanupFunctionName"] !== null) {
            $this->ServiceWebsocketCleanupFunctionName = $param["ServiceWebsocketCleanupFunctionName"];
        }

        if (array_key_exists("ServiceWebsocketTransportFunctionName",$param) and $param["ServiceWebsocketTransportFunctionName"] !== null) {
            $this->ServiceWebsocketTransportFunctionName = $param["ServiceWebsocketTransportFunctionName"];
        }

        if (array_key_exists("ServiceScfFunctionNamespace",$param) and $param["ServiceScfFunctionNamespace"] !== null) {
            $this->ServiceScfFunctionNamespace = $param["ServiceScfFunctionNamespace"];
        }

        if (array_key_exists("ServiceScfFunctionQualifier",$param) and $param["ServiceScfFunctionQualifier"] !== null) {
            $this->ServiceScfFunctionQualifier = $param["ServiceScfFunctionQualifier"];
        }

        if (array_key_exists("ServiceWebsocketRegisterFunctionNamespace",$param) and $param["ServiceWebsocketRegisterFunctionNamespace"] !== null) {
            $this->ServiceWebsocketRegisterFunctionNamespace = $param["ServiceWebsocketRegisterFunctionNamespace"];
        }

        if (array_key_exists("ServiceWebsocketRegisterFunctionQualifier",$param) and $param["ServiceWebsocketRegisterFunctionQualifier"] !== null) {
            $this->ServiceWebsocketRegisterFunctionQualifier = $param["ServiceWebsocketRegisterFunctionQualifier"];
        }

        if (array_key_exists("ServiceWebsocketTransportFunctionNamespace",$param) and $param["ServiceWebsocketTransportFunctionNamespace"] !== null) {
            $this->ServiceWebsocketTransportFunctionNamespace = $param["ServiceWebsocketTransportFunctionNamespace"];
        }

        if (array_key_exists("ServiceWebsocketTransportFunctionQualifier",$param) and $param["ServiceWebsocketTransportFunctionQualifier"] !== null) {
            $this->ServiceWebsocketTransportFunctionQualifier = $param["ServiceWebsocketTransportFunctionQualifier"];
        }

        if (array_key_exists("ServiceWebsocketCleanupFunctionNamespace",$param) and $param["ServiceWebsocketCleanupFunctionNamespace"] !== null) {
            $this->ServiceWebsocketCleanupFunctionNamespace = $param["ServiceWebsocketCleanupFunctionNamespace"];
        }

        if (array_key_exists("ServiceWebsocketCleanupFunctionQualifier",$param) and $param["ServiceWebsocketCleanupFunctionQualifier"] !== null) {
            $this->ServiceWebsocketCleanupFunctionQualifier = $param["ServiceWebsocketCleanupFunctionQualifier"];
        }

        if (array_key_exists("ServiceScfIsIntegratedResponse",$param) and $param["ServiceScfIsIntegratedResponse"] !== null) {
            $this->ServiceScfIsIntegratedResponse = $param["ServiceScfIsIntegratedResponse"];
        }

        if (array_key_exists("IsDebugAfterCharge",$param) and $param["IsDebugAfterCharge"] !== null) {
            $this->IsDebugAfterCharge = $param["IsDebugAfterCharge"];
        }

        if (array_key_exists("IsDeleteResponseErrorCodes",$param) and $param["IsDeleteResponseErrorCodes"] !== null) {
            $this->IsDeleteResponseErrorCodes = $param["IsDeleteResponseErrorCodes"];
        }

        if (array_key_exists("ResponseType",$param) and $param["ResponseType"] !== null) {
            $this->ResponseType = $param["ResponseType"];
        }

        if (array_key_exists("ResponseSuccessExample",$param) and $param["ResponseSuccessExample"] !== null) {
            $this->ResponseSuccessExample = $param["ResponseSuccessExample"];
        }

        if (array_key_exists("ResponseFailExample",$param) and $param["ResponseFailExample"] !== null) {
            $this->ResponseFailExample = $param["ResponseFailExample"];
        }

        if (array_key_exists("ServiceConfig",$param) and $param["ServiceConfig"] !== null) {
            $this->ServiceConfig = new ServiceConfig();
            $this->ServiceConfig->deserialize($param["ServiceConfig"]);
        }

        if (array_key_exists("AuthRelationApiId",$param) and $param["AuthRelationApiId"] !== null) {
            $this->AuthRelationApiId = $param["AuthRelationApiId"];
        }

        if (array_key_exists("ServiceParameters",$param) and $param["ServiceParameters"] !== null) {
            $this->ServiceParameters = [];
            foreach ($param["ServiceParameters"] as $key => $value){
                $obj = new ServiceParameter();
                $obj->deserialize($value);
                array_push($this->ServiceParameters, $obj);
            }
        }

        if (array_key_exists("OauthConfig",$param) and $param["OauthConfig"] !== null) {
            $this->OauthConfig = new OauthConfig();
            $this->OauthConfig->deserialize($param["OauthConfig"]);
        }

        if (array_key_exists("ResponseErrorCodes",$param) and $param["ResponseErrorCodes"] !== null) {
            $this->ResponseErrorCodes = [];
            foreach ($param["ResponseErrorCodes"] as $key => $value){
                $obj = new ResponseErrorCodeReq();
                $obj->deserialize($value);
                array_push($this->ResponseErrorCodes, $obj);
            }
        }

        if (array_key_exists("TargetNamespaceId",$param) and $param["TargetNamespaceId"] !== null) {
            $this->TargetNamespaceId = $param["TargetNamespaceId"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("IsBase64Encoded",$param) and $param["IsBase64Encoded"] !== null) {
            $this->IsBase64Encoded = $param["IsBase64Encoded"];
        }
    }
}
