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
 * api状态详情
 *
 * @method string getServiceId() 获取服务唯一ID。
 * @method void setServiceId(string $ServiceId) 设置服务唯一ID。
 * @method string getApiId() 获取API唯一ID。
 * @method void setApiId(string $ApiId) 设置API唯一ID。
 * @method string getApiDesc() 获取用户自定义的 API 接口描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiDesc(string $ApiDesc) 设置用户自定义的 API 接口描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiName() 获取API 接口的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiName(string $ApiName) 设置API 接口的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVpcId() 获取VPCID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(integer $VpcId) 设置VPCID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpcId() 获取VPC唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqVpcId(string $UniqVpcId) 设置VPC唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiType() 获取API类型。取值为NORMAL（普通API）和TSF（微服务API）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiType(string $ApiType) 设置API类型。取值为NORMAL（普通API）和TSF（微服务API）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取API协议。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置API协议。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDebugAfterCharge() 获取是否买后调试。（云市场预留字段）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDebugAfterCharge(boolean $IsDebugAfterCharge) 设置是否买后调试。（云市场预留字段）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthType() 获取API 鉴权类型。取值为SECRET（密钥对鉴权）、NONE（免鉴权）、OAUTH。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthType(string $AuthType) 设置API 鉴权类型。取值为SECRET（密钥对鉴权）、NONE（免鉴权）、OAUTH。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiBusinessType() 获取OAUTH API的类型。当AuthType 为 OAUTH时该字段有效， 取值为NORMAL（业务API）和 OAUTH（授权API）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiBusinessType(string $ApiBusinessType) 设置OAUTH API的类型。当AuthType 为 OAUTH时该字段有效， 取值为NORMAL（业务API）和 OAUTH（授权API）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthRelationApiId() 获取关联的授权API 唯一 ID，当AuthType为OAUTH且ApiBusinessType为NORMAL时生效。标示业务API绑定的oauth2.0授权API唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthRelationApiId(string $AuthRelationApiId) 设置关联的授权API 唯一 ID，当AuthType为OAUTH且ApiBusinessType为NORMAL时生效。标示业务API绑定的oauth2.0授权API唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OauthConfig getOauthConfig() 获取OAUTH 配置信息。当AuthType是OAUTH时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOauthConfig(OauthConfig $OauthConfig) 设置OAUTH 配置信息。当AuthType是OAUTH时生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRelationBuniessApiIds() 获取授权API关联的业务API列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelationBuniessApiIds(array $RelationBuniessApiIds) 设置授权API关联的业务API列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取API关联的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置API关联的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取API 的路径，如 /path。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置API 的路径，如 /path。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMethod() 获取API 的请求方法，如 GET。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(string $Method) 设置API 的请求方法，如 GET。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DesApisStatus extends AbstractModel
{
    /**
     * @var string 服务唯一ID。
     */
    public $ServiceId;

    /**
     * @var string API唯一ID。
     */
    public $ApiId;

    /**
     * @var string 用户自定义的 API 接口描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiDesc;

    /**
     * @var string 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @var string API 接口的名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiName;

    /**
     * @var integer VPCID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string VPC唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqVpcId;

    /**
     * @var string API类型。取值为NORMAL（普通API）和TSF（微服务API）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiType;

    /**
     * @var string API协议。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var boolean 是否买后调试。（云市场预留字段）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDebugAfterCharge;

    /**
     * @var string API 鉴权类型。取值为SECRET（密钥对鉴权）、NONE（免鉴权）、OAUTH。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthType;

    /**
     * @var string OAUTH API的类型。当AuthType 为 OAUTH时该字段有效， 取值为NORMAL（业务API）和 OAUTH（授权API）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiBusinessType;

    /**
     * @var string 关联的授权API 唯一 ID，当AuthType为OAUTH且ApiBusinessType为NORMAL时生效。标示业务API绑定的oauth2.0授权API唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthRelationApiId;

    /**
     * @var OauthConfig OAUTH 配置信息。当AuthType是OAUTH时生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OauthConfig;

    /**
     * @var array 授权API关联的业务API列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelationBuniessApiIds;

    /**
     * @var array API关联的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string API 的路径，如 /path。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string API 的请求方法，如 GET。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @param string $ServiceId 服务唯一ID。
     * @param string $ApiId API唯一ID。
     * @param string $ApiDesc 用户自定义的 API 接口描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiName API 接口的名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VpcId VPCID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpcId VPC唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiType API类型。取值为NORMAL（普通API）和TSF（微服务API）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol API协议。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDebugAfterCharge 是否买后调试。（云市场预留字段）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthType API 鉴权类型。取值为SECRET（密钥对鉴权）、NONE（免鉴权）、OAUTH。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiBusinessType OAUTH API的类型。当AuthType 为 OAUTH时该字段有效， 取值为NORMAL（业务API）和 OAUTH（授权API）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthRelationApiId 关联的授权API 唯一 ID，当AuthType为OAUTH且ApiBusinessType为NORMAL时生效。标示业务API绑定的oauth2.0授权API唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OauthConfig $OauthConfig OAUTH 配置信息。当AuthType是OAUTH时生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RelationBuniessApiIds 授权API关联的业务API列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags API关联的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path API 的路径，如 /path。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Method API 的请求方法，如 GET。
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("IsDebugAfterCharge",$param) and $param["IsDebugAfterCharge"] !== null) {
            $this->IsDebugAfterCharge = $param["IsDebugAfterCharge"];
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

        if (array_key_exists("RelationBuniessApiIds",$param) and $param["RelationBuniessApiIds"] !== null) {
            $this->RelationBuniessApiIds = $param["RelationBuniessApiIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }
    }
}
