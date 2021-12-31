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
 * API状态
 *
 * @method string getServiceId() 获取服务唯一ID。
 * @method void setServiceId(string $ServiceId) 设置服务唯一ID。
 * @method string getApiId() 获取API唯一ID。
 * @method void setApiId(string $ApiId) 设置API唯一ID。
 * @method string getApiDesc() 获取API描述
 * @method void setApiDesc(string $ApiDesc) 设置API描述
 * @method string getPath() 获取API PATH。
 * @method void setPath(string $Path) 设置API PATH。
 * @method string getMethod() 获取API METHOD。
 * @method void setMethod(string $Method) 设置API METHOD。
 * @method string getCreatedTime() 获取服务创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置服务创建时间。
 * @method string getModifiedTime() 获取服务修改时间。
 * @method void setModifiedTime(string $ModifiedTime) 设置服务修改时间。
 * @method string getApiName() 获取API名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiName(string $ApiName) 设置API名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpcId() 获取VPC唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqVpcId(string $UniqVpcId) 设置VPC唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiType() 获取API类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiType(string $ApiType) 设置API类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取API协议。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置API协议。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDebugAfterCharge() 获取是否买后调试。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDebugAfterCharge(boolean $IsDebugAfterCharge) 设置是否买后调试。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthType() 获取授权类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthType(string $AuthType) 设置授权类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiBusinessType() 获取API业务类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiBusinessType(string $ApiBusinessType) 设置API业务类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthRelationApiId() 获取关联授权API唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthRelationApiId(string $AuthRelationApiId) 设置关联授权API唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRelationBuniessApiIds() 获取授权API关联的业务API列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelationBuniessApiIds(array $RelationBuniessApiIds) 设置授权API关联的业务API列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OauthConfig getOauthConfig() 获取oauth配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOauthConfig(OauthConfig $OauthConfig) 设置oauth配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTokenLocation() 获取oauth2.0API请求，token存放位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenLocation(string $TokenLocation) 设置oauth2.0API请求，token存放位置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiIdStatus extends AbstractModel
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
     * @var string API描述
     */
    public $ApiDesc;

    /**
     * @var string API PATH。
     */
    public $Path;

    /**
     * @var string API METHOD。
     */
    public $Method;

    /**
     * @var string 服务创建时间。
     */
    public $CreatedTime;

    /**
     * @var string 服务修改时间。
     */
    public $ModifiedTime;

    /**
     * @var string API名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiName;

    /**
     * @var string VPC唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqVpcId;

    /**
     * @var string API类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiType;

    /**
     * @var string API协议。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var boolean 是否买后调试。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDebugAfterCharge;

    /**
     * @var string 授权类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthType;

    /**
     * @var string API业务类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiBusinessType;

    /**
     * @var string 关联授权API唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthRelationApiId;

    /**
     * @var array 授权API关联的业务API列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelationBuniessApiIds;

    /**
     * @var OauthConfig oauth配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OauthConfig;

    /**
     * @var string oauth2.0API请求，token存放位置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenLocation;

    /**
     * @param string $ServiceId 服务唯一ID。
     * @param string $ApiId API唯一ID。
     * @param string $ApiDesc API描述
     * @param string $Path API PATH。
     * @param string $Method API METHOD。
     * @param string $CreatedTime 服务创建时间。
     * @param string $ModifiedTime 服务修改时间。
     * @param string $ApiName API名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpcId VPC唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiType API类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol API协议。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDebugAfterCharge 是否买后调试。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthType 授权类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiBusinessType API业务类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthRelationApiId 关联授权API唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RelationBuniessApiIds 授权API关联的业务API列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OauthConfig $OauthConfig oauth配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TokenLocation oauth2.0API请求，token存放位置。
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
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

        if (array_key_exists("RelationBuniessApiIds",$param) and $param["RelationBuniessApiIds"] !== null) {
            $this->RelationBuniessApiIds = $param["RelationBuniessApiIds"];
        }

        if (array_key_exists("OauthConfig",$param) and $param["OauthConfig"] !== null) {
            $this->OauthConfig = new OauthConfig();
            $this->OauthConfig->deserialize($param["OauthConfig"]);
        }

        if (array_key_exists("TokenLocation",$param) and $param["TokenLocation"] !== null) {
            $this->TokenLocation = $param["TokenLocation"];
        }
    }
}
