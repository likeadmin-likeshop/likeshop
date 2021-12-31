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
 * 展示api信息
 *
 * @method string getServiceId() 获取API 所在的服务唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceId(string $ServiceId) 设置API 所在的服务唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取API 所在的服务的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置API 所在的服务的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceDesc() 获取API 所在的服务的描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceDesc(string $ServiceDesc) 设置API 所在的服务的描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiId() 获取API 接口唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiId(string $ApiId) 设置API 接口唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiDesc() 获取API 接口的描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiDesc(string $ApiDesc) 设置API 接口的描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取最后修改时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置最后修改时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiName() 获取API 接口的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiName(string $ApiName) 设置API 接口的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiType() 获取API 类型。可取值为NORMAL（普通API）、TSF（微服务API）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiType(string $ApiType) 设置API 类型。可取值为NORMAL（普通API）、TSF（微服务API）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取API 的前端请求类型，如 HTTP 或 HTTPS 或者 HTTP 和 HTTPS。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置API 的前端请求类型，如 HTTP 或 HTTPS 或者 HTTP 和 HTTPS。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthType() 获取API 鉴权类型。可取值为 SECRET（密钥对鉴权）、NONE（免鉴权）、OAUTH。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthType(string $AuthType) 设置API 鉴权类型。可取值为 SECRET（密钥对鉴权）、NONE（免鉴权）、OAUTH。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiBusinessType() 获取OAUTH API的类型。可取值为NORMAL（业务API）、OAUTH（授权API）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiBusinessType(string $ApiBusinessType) 设置OAUTH API的类型。可取值为NORMAL（业务API）、OAUTH（授权API）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthRelationApiId() 获取OAUTH 业务API 关联的授权API 唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthRelationApiId(string $AuthRelationApiId) 设置OAUTH 业务API 关联的授权API 唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OauthConfig getOauthConfig() 获取OAUTH配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOauthConfig(OauthConfig $OauthConfig) 设置OAUTH配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDebugAfterCharge() 获取是否购买后调试（云市场预留参数）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDebugAfterCharge(boolean $IsDebugAfterCharge) 设置是否购买后调试（云市场预留参数）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RequestConfig getRequestConfig() 获取请求的前端配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestConfig(RequestConfig $RequestConfig) 设置请求的前端配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResponseType() 获取返回类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseType(string $ResponseType) 设置返回类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResponseSuccessExample() 获取自定义响应配置成功响应示例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseSuccessExample(string $ResponseSuccessExample) 设置自定义响应配置成功响应示例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResponseFailExample() 获取自定义响应配置失败响应示例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseFailExample(string $ResponseFailExample) 设置自定义响应配置失败响应示例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResponseErrorCodes() 获取用户自定义错误码配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseErrorCodes(array $ResponseErrorCodes) 设置用户自定义错误码配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRequestParameters() 获取前端请求参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestParameters(array $RequestParameters) 设置前端请求参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getServiceTimeout() 获取API 的后端服务超时时间，单位是秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceTimeout(integer $ServiceTimeout) 设置API 的后端服务超时时间，单位是秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceType() 获取API 的后端服务类型。可取值为 HTTP、MOCK、TSF、CLB、SCF、WEBSOCKET、TARGET（内测）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceType(string $ServiceType) 设置API 的后端服务类型。可取值为 HTTP、MOCK、TSF、CLB、SCF、WEBSOCKET、TARGET（内测）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServiceConfig getServiceConfig() 获取API 的后端服务配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceConfig(ServiceConfig $ServiceConfig) 设置API 的后端服务配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServiceParameters() 获取API的后端服务参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceParameters(array $ServiceParameters) 设置API的后端服务参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConstantParameters() 获取常量参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConstantParameters(array $ConstantParameters) 设置常量参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceMockReturnMessage() 获取API 的后端 Mock 返回信息。如果 ServiceType 是 Mock，则此参数必传。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceMockReturnMessage(string $ServiceMockReturnMessage) 设置API 的后端 Mock 返回信息。如果 ServiceType 是 Mock，则此参数必传。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceScfFunctionName() 获取scf 函数名称。当后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceScfFunctionName(string $ServiceScfFunctionName) 设置scf 函数名称。当后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceScfFunctionNamespace() 获取scf 函数命名空间。当后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceScfFunctionNamespace(string $ServiceScfFunctionNamespace) 设置scf 函数命名空间。当后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceScfFunctionQualifier() 获取scf函数版本。当后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceScfFunctionQualifier(string $ServiceScfFunctionQualifier) 设置scf函数版本。当后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getServiceScfIsIntegratedResponse() 获取是否开启集成响应。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceScfIsIntegratedResponse(boolean $ServiceScfIsIntegratedResponse) 设置是否开启集成响应。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceWebsocketRegisterFunctionName() 获取scf websocket注册函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceWebsocketRegisterFunctionName(string $ServiceWebsocketRegisterFunctionName) 设置scf websocket注册函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceWebsocketRegisterFunctionNamespace() 获取scf websocket注册函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceWebsocketRegisterFunctionNamespace(string $ServiceWebsocketRegisterFunctionNamespace) 设置scf websocket注册函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceWebsocketRegisterFunctionQualifier() 获取scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceWebsocketRegisterFunctionQualifier(string $ServiceWebsocketRegisterFunctionQualifier) 设置scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceWebsocketCleanupFunctionName() 获取scf websocket清理函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceWebsocketCleanupFunctionName(string $ServiceWebsocketCleanupFunctionName) 设置scf websocket清理函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceWebsocketCleanupFunctionNamespace() 获取scf websocket清理函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceWebsocketCleanupFunctionNamespace(string $ServiceWebsocketCleanupFunctionNamespace) 设置scf websocket清理函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceWebsocketCleanupFunctionQualifier() 获取scf websocket清理函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceWebsocketCleanupFunctionQualifier(string $ServiceWebsocketCleanupFunctionQualifier) 设置scf websocket清理函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInternalDomain() 获取WEBSOCKET 回推地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternalDomain(string $InternalDomain) 设置WEBSOCKET 回推地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceWebsocketTransportFunctionName() 获取scf websocket传输函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceWebsocketTransportFunctionName(string $ServiceWebsocketTransportFunctionName) 设置scf websocket传输函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceWebsocketTransportFunctionNamespace() 获取scf websocket传输函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceWebsocketTransportFunctionNamespace(string $ServiceWebsocketTransportFunctionNamespace) 设置scf websocket传输函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceWebsocketTransportFunctionQualifier() 获取scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceWebsocketTransportFunctionQualifier(string $ServiceWebsocketTransportFunctionQualifier) 设置scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMicroServices() 获取API绑定微服务服务列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroServices(array $MicroServices) 设置API绑定微服务服务列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMicroServicesInfo() 获取微服务信息详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroServicesInfo(array $MicroServicesInfo) 设置微服务信息详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TsfLoadBalanceConfResp getServiceTsfLoadBalanceConf() 获取微服务的负载均衡配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceTsfLoadBalanceConf(TsfLoadBalanceConfResp $ServiceTsfLoadBalanceConf) 设置微服务的负载均衡配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthCheckConf getServiceTsfHealthCheckConf() 获取微服务的健康检查配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceTsfHealthCheckConf(HealthCheckConf $ServiceTsfHealthCheckConf) 设置微服务的健康检查配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableCORS() 获取是否开启跨域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableCORS(boolean $EnableCORS) 设置是否开启跨域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取API绑定的tag信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置API绑定的tag信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEnvironments() 获取API已发布的环境信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironments(array $Environments) 设置API已发布的环境信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsBase64Encoded() 获取是否开启Base64编码，只有后端为scf时才会生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsBase64Encoded(boolean $IsBase64Encoded) 设置是否开启Base64编码，只有后端为scf时才会生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsBase64Trigger() 获取是否开启Base64编码的header触发，只有后端为scf时才会生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsBase64Trigger(boolean $IsBase64Trigger) 设置是否开启Base64编码的header触发，只有后端为scf时才会生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBase64EncodedTriggerRules() 获取Header触发规则，总规则数量不超过10。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBase64EncodedTriggerRules(array $Base64EncodedTriggerRules) 设置Header触发规则，总规则数量不超过10。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiInfo extends AbstractModel
{
    /**
     * @var string API 所在的服务唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceId;

    /**
     * @var string API 所在的服务的名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string API 所在的服务的描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceDesc;

    /**
     * @var string API 接口唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiId;

    /**
     * @var string API 接口的描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiDesc;

    /**
     * @var string 创建时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 最后修改时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @var string API 接口的名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiName;

    /**
     * @var string API 类型。可取值为NORMAL（普通API）、TSF（微服务API）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiType;

    /**
     * @var string API 的前端请求类型，如 HTTP 或 HTTPS 或者 HTTP 和 HTTPS。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string API 鉴权类型。可取值为 SECRET（密钥对鉴权）、NONE（免鉴权）、OAUTH。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthType;

    /**
     * @var string OAUTH API的类型。可取值为NORMAL（业务API）、OAUTH（授权API）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiBusinessType;

    /**
     * @var string OAUTH 业务API 关联的授权API 唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthRelationApiId;

    /**
     * @var OauthConfig OAUTH配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OauthConfig;

    /**
     * @var boolean 是否购买后调试（云市场预留参数）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDebugAfterCharge;

    /**
     * @var RequestConfig 请求的前端配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestConfig;

    /**
     * @var string 返回类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseType;

    /**
     * @var string 自定义响应配置成功响应示例。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseSuccessExample;

    /**
     * @var string 自定义响应配置失败响应示例。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseFailExample;

    /**
     * @var array 用户自定义错误码配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseErrorCodes;

    /**
     * @var array 前端请求参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestParameters;

    /**
     * @var integer API 的后端服务超时时间，单位是秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceTimeout;

    /**
     * @var string API 的后端服务类型。可取值为 HTTP、MOCK、TSF、CLB、SCF、WEBSOCKET、TARGET（内测）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceType;

    /**
     * @var ServiceConfig API 的后端服务配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceConfig;

    /**
     * @var array API的后端服务参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceParameters;

    /**
     * @var array 常量参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConstantParameters;

    /**
     * @var string API 的后端 Mock 返回信息。如果 ServiceType 是 Mock，则此参数必传。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceMockReturnMessage;

    /**
     * @var string scf 函数名称。当后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceScfFunctionName;

    /**
     * @var string scf 函数命名空间。当后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceScfFunctionNamespace;

    /**
     * @var string scf函数版本。当后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceScfFunctionQualifier;

    /**
     * @var boolean 是否开启集成响应。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceScfIsIntegratedResponse;

    /**
     * @var string scf websocket注册函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceWebsocketRegisterFunctionName;

    /**
     * @var string scf websocket注册函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceWebsocketRegisterFunctionNamespace;

    /**
     * @var string scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceWebsocketRegisterFunctionQualifier;

    /**
     * @var string scf websocket清理函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceWebsocketCleanupFunctionName;

    /**
     * @var string scf websocket清理函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceWebsocketCleanupFunctionNamespace;

    /**
     * @var string scf websocket清理函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceWebsocketCleanupFunctionQualifier;

    /**
     * @var string WEBSOCKET 回推地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternalDomain;

    /**
     * @var string scf websocket传输函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceWebsocketTransportFunctionName;

    /**
     * @var string scf websocket传输函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceWebsocketTransportFunctionNamespace;

    /**
     * @var string scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceWebsocketTransportFunctionQualifier;

    /**
     * @var array API绑定微服务服务列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroServices;

    /**
     * @var array 微服务信息详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroServicesInfo;

    /**
     * @var TsfLoadBalanceConfResp 微服务的负载均衡配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceTsfLoadBalanceConf;

    /**
     * @var HealthCheckConf 微服务的健康检查配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceTsfHealthCheckConf;

    /**
     * @var boolean 是否开启跨域。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableCORS;

    /**
     * @var array API绑定的tag信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array API已发布的环境信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Environments;

    /**
     * @var boolean 是否开启Base64编码，只有后端为scf时才会生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsBase64Encoded;

    /**
     * @var boolean 是否开启Base64编码的header触发，只有后端为scf时才会生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsBase64Trigger;

    /**
     * @var array Header触发规则，总规则数量不超过10。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Base64EncodedTriggerRules;

    /**
     * @param string $ServiceId API 所在的服务唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName API 所在的服务的名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceDesc API 所在的服务的描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiId API 接口唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiDesc API 接口的描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 最后修改时间，按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiName API 接口的名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiType API 类型。可取值为NORMAL（普通API）、TSF（微服务API）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol API 的前端请求类型，如 HTTP 或 HTTPS 或者 HTTP 和 HTTPS。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthType API 鉴权类型。可取值为 SECRET（密钥对鉴权）、NONE（免鉴权）、OAUTH。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiBusinessType OAUTH API的类型。可取值为NORMAL（业务API）、OAUTH（授权API）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthRelationApiId OAUTH 业务API 关联的授权API 唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OauthConfig $OauthConfig OAUTH配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDebugAfterCharge 是否购买后调试（云市场预留参数）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RequestConfig $RequestConfig 请求的前端配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResponseType 返回类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResponseSuccessExample 自定义响应配置成功响应示例。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResponseFailExample 自定义响应配置失败响应示例。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResponseErrorCodes 用户自定义错误码配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RequestParameters 前端请求参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ServiceTimeout API 的后端服务超时时间，单位是秒。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceType API 的后端服务类型。可取值为 HTTP、MOCK、TSF、CLB、SCF、WEBSOCKET、TARGET（内测）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServiceConfig $ServiceConfig API 的后端服务配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServiceParameters API的后端服务参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConstantParameters 常量参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceMockReturnMessage API 的后端 Mock 返回信息。如果 ServiceType 是 Mock，则此参数必传。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceScfFunctionName scf 函数名称。当后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceScfFunctionNamespace scf 函数命名空间。当后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceScfFunctionQualifier scf函数版本。当后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ServiceScfIsIntegratedResponse 是否开启集成响应。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceWebsocketRegisterFunctionName scf websocket注册函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceWebsocketRegisterFunctionNamespace scf websocket注册函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceWebsocketRegisterFunctionQualifier scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceWebsocketCleanupFunctionName scf websocket清理函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceWebsocketCleanupFunctionNamespace scf websocket清理函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceWebsocketCleanupFunctionQualifier scf websocket清理函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InternalDomain WEBSOCKET 回推地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceWebsocketTransportFunctionName scf websocket传输函数。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceWebsocketTransportFunctionNamespace scf websocket传输函数命名空间。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceWebsocketTransportFunctionQualifier scf websocket传输函数版本。当前端类型是WEBSOCKET且后端类型是SCF时生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MicroServices API绑定微服务服务列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MicroServicesInfo 微服务信息详情。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TsfLoadBalanceConfResp $ServiceTsfLoadBalanceConf 微服务的负载均衡配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthCheckConf $ServiceTsfHealthCheckConf 微服务的健康检查配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableCORS 是否开启跨域。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags API绑定的tag信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Environments API已发布的环境信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsBase64Encoded 是否开启Base64编码，只有后端为scf时才会生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsBase64Trigger 是否开启Base64编码的header触发，只有后端为scf时才会生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Base64EncodedTriggerRules Header触发规则，总规则数量不超过10。
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceDesc",$param) and $param["ServiceDesc"] !== null) {
            $this->ServiceDesc = $param["ServiceDesc"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ApiDesc",$param) and $param["ApiDesc"] !== null) {
            $this->ApiDesc = $param["ApiDesc"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("ApiBusinessType",$param) and $param["ApiBusinessType"] !== null) {
            $this->ApiBusinessType = $param["ApiBusinessType"];
        }

        if (array_key_exists("AuthRelationApiId",$param) and $param["AuthRelationApiId"] !== null) {
            $this->AuthRelationApiId = $param["AuthRelationApiId"];
        }

        if (array_key_exists("OauthConfig",$param) and $param["OauthConfig"] !== null) {
            $this->OauthConfig = new OauthConfig();
            $this->OauthConfig->deserialize($param["OauthConfig"]);
        }

        if (array_key_exists("IsDebugAfterCharge",$param) and $param["IsDebugAfterCharge"] !== null) {
            $this->IsDebugAfterCharge = $param["IsDebugAfterCharge"];
        }

        if (array_key_exists("RequestConfig",$param) and $param["RequestConfig"] !== null) {
            $this->RequestConfig = new RequestConfig();
            $this->RequestConfig->deserialize($param["RequestConfig"]);
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

        if (array_key_exists("ResponseErrorCodes",$param) and $param["ResponseErrorCodes"] !== null) {
            $this->ResponseErrorCodes = [];
            foreach ($param["ResponseErrorCodes"] as $key => $value){
                $obj = new ErrorCodes();
                $obj->deserialize($value);
                array_push($this->ResponseErrorCodes, $obj);
            }
        }

        if (array_key_exists("RequestParameters",$param) and $param["RequestParameters"] !== null) {
            $this->RequestParameters = [];
            foreach ($param["RequestParameters"] as $key => $value){
                $obj = new ReqParameter();
                $obj->deserialize($value);
                array_push($this->RequestParameters, $obj);
            }
        }

        if (array_key_exists("ServiceTimeout",$param) and $param["ServiceTimeout"] !== null) {
            $this->ServiceTimeout = $param["ServiceTimeout"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ServiceConfig",$param) and $param["ServiceConfig"] !== null) {
            $this->ServiceConfig = new ServiceConfig();
            $this->ServiceConfig->deserialize($param["ServiceConfig"]);
        }

        if (array_key_exists("ServiceParameters",$param) and $param["ServiceParameters"] !== null) {
            $this->ServiceParameters = [];
            foreach ($param["ServiceParameters"] as $key => $value){
                $obj = new ServiceParameter();
                $obj->deserialize($value);
                array_push($this->ServiceParameters, $obj);
            }
        }

        if (array_key_exists("ConstantParameters",$param) and $param["ConstantParameters"] !== null) {
            $this->ConstantParameters = [];
            foreach ($param["ConstantParameters"] as $key => $value){
                $obj = new ConstantParameter();
                $obj->deserialize($value);
                array_push($this->ConstantParameters, $obj);
            }
        }

        if (array_key_exists("ServiceMockReturnMessage",$param) and $param["ServiceMockReturnMessage"] !== null) {
            $this->ServiceMockReturnMessage = $param["ServiceMockReturnMessage"];
        }

        if (array_key_exists("ServiceScfFunctionName",$param) and $param["ServiceScfFunctionName"] !== null) {
            $this->ServiceScfFunctionName = $param["ServiceScfFunctionName"];
        }

        if (array_key_exists("ServiceScfFunctionNamespace",$param) and $param["ServiceScfFunctionNamespace"] !== null) {
            $this->ServiceScfFunctionNamespace = $param["ServiceScfFunctionNamespace"];
        }

        if (array_key_exists("ServiceScfFunctionQualifier",$param) and $param["ServiceScfFunctionQualifier"] !== null) {
            $this->ServiceScfFunctionQualifier = $param["ServiceScfFunctionQualifier"];
        }

        if (array_key_exists("ServiceScfIsIntegratedResponse",$param) and $param["ServiceScfIsIntegratedResponse"] !== null) {
            $this->ServiceScfIsIntegratedResponse = $param["ServiceScfIsIntegratedResponse"];
        }

        if (array_key_exists("ServiceWebsocketRegisterFunctionName",$param) and $param["ServiceWebsocketRegisterFunctionName"] !== null) {
            $this->ServiceWebsocketRegisterFunctionName = $param["ServiceWebsocketRegisterFunctionName"];
        }

        if (array_key_exists("ServiceWebsocketRegisterFunctionNamespace",$param) and $param["ServiceWebsocketRegisterFunctionNamespace"] !== null) {
            $this->ServiceWebsocketRegisterFunctionNamespace = $param["ServiceWebsocketRegisterFunctionNamespace"];
        }

        if (array_key_exists("ServiceWebsocketRegisterFunctionQualifier",$param) and $param["ServiceWebsocketRegisterFunctionQualifier"] !== null) {
            $this->ServiceWebsocketRegisterFunctionQualifier = $param["ServiceWebsocketRegisterFunctionQualifier"];
        }

        if (array_key_exists("ServiceWebsocketCleanupFunctionName",$param) and $param["ServiceWebsocketCleanupFunctionName"] !== null) {
            $this->ServiceWebsocketCleanupFunctionName = $param["ServiceWebsocketCleanupFunctionName"];
        }

        if (array_key_exists("ServiceWebsocketCleanupFunctionNamespace",$param) and $param["ServiceWebsocketCleanupFunctionNamespace"] !== null) {
            $this->ServiceWebsocketCleanupFunctionNamespace = $param["ServiceWebsocketCleanupFunctionNamespace"];
        }

        if (array_key_exists("ServiceWebsocketCleanupFunctionQualifier",$param) and $param["ServiceWebsocketCleanupFunctionQualifier"] !== null) {
            $this->ServiceWebsocketCleanupFunctionQualifier = $param["ServiceWebsocketCleanupFunctionQualifier"];
        }

        if (array_key_exists("InternalDomain",$param) and $param["InternalDomain"] !== null) {
            $this->InternalDomain = $param["InternalDomain"];
        }

        if (array_key_exists("ServiceWebsocketTransportFunctionName",$param) and $param["ServiceWebsocketTransportFunctionName"] !== null) {
            $this->ServiceWebsocketTransportFunctionName = $param["ServiceWebsocketTransportFunctionName"];
        }

        if (array_key_exists("ServiceWebsocketTransportFunctionNamespace",$param) and $param["ServiceWebsocketTransportFunctionNamespace"] !== null) {
            $this->ServiceWebsocketTransportFunctionNamespace = $param["ServiceWebsocketTransportFunctionNamespace"];
        }

        if (array_key_exists("ServiceWebsocketTransportFunctionQualifier",$param) and $param["ServiceWebsocketTransportFunctionQualifier"] !== null) {
            $this->ServiceWebsocketTransportFunctionQualifier = $param["ServiceWebsocketTransportFunctionQualifier"];
        }

        if (array_key_exists("MicroServices",$param) and $param["MicroServices"] !== null) {
            $this->MicroServices = [];
            foreach ($param["MicroServices"] as $key => $value){
                $obj = new MicroService();
                $obj->deserialize($value);
                array_push($this->MicroServices, $obj);
            }
        }

        if (array_key_exists("MicroServicesInfo",$param) and $param["MicroServicesInfo"] !== null) {
            $this->MicroServicesInfo = $param["MicroServicesInfo"];
        }

        if (array_key_exists("ServiceTsfLoadBalanceConf",$param) and $param["ServiceTsfLoadBalanceConf"] !== null) {
            $this->ServiceTsfLoadBalanceConf = new TsfLoadBalanceConfResp();
            $this->ServiceTsfLoadBalanceConf->deserialize($param["ServiceTsfLoadBalanceConf"]);
        }

        if (array_key_exists("ServiceTsfHealthCheckConf",$param) and $param["ServiceTsfHealthCheckConf"] !== null) {
            $this->ServiceTsfHealthCheckConf = new HealthCheckConf();
            $this->ServiceTsfHealthCheckConf->deserialize($param["ServiceTsfHealthCheckConf"]);
        }

        if (array_key_exists("EnableCORS",$param) and $param["EnableCORS"] !== null) {
            $this->EnableCORS = $param["EnableCORS"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Environments",$param) and $param["Environments"] !== null) {
            $this->Environments = $param["Environments"];
        }

        if (array_key_exists("IsBase64Encoded",$param) and $param["IsBase64Encoded"] !== null) {
            $this->IsBase64Encoded = $param["IsBase64Encoded"];
        }

        if (array_key_exists("IsBase64Trigger",$param) and $param["IsBase64Trigger"] !== null) {
            $this->IsBase64Trigger = $param["IsBase64Trigger"];
        }

        if (array_key_exists("Base64EncodedTriggerRules",$param) and $param["Base64EncodedTriggerRules"] !== null) {
            $this->Base64EncodedTriggerRules = [];
            foreach ($param["Base64EncodedTriggerRules"] as $key => $value){
                $obj = new Base64EncodedTriggerRule();
                $obj->deserialize($value);
                array_push($this->Base64EncodedTriggerRules, $obj);
            }
        }
    }
}
