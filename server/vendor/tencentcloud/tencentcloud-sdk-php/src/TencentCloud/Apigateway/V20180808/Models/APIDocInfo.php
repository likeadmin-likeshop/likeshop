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
 * API文档详细信息
 *
 * @method string getApiDocId() 获取API文档ID
 * @method void setApiDocId(string $ApiDocId) 设置API文档ID
 * @method string getApiDocName() 获取API文档名称
 * @method void setApiDocName(string $ApiDocName) 设置API文档名称
 * @method string getApiDocStatus() 获取API文档构建状态
 * @method void setApiDocStatus(string $ApiDocStatus) 设置API文档构建状态
 * @method integer getApiCount() 获取API文档API数量
 * @method void setApiCount(integer $ApiCount) 设置API文档API数量
 * @method integer getViewCount() 获取API文档查看次数
 * @method void setViewCount(integer $ViewCount) 设置API文档查看次数
 * @method integer getReleaseCount() 获取API文档发布次数
 * @method void setReleaseCount(integer $ReleaseCount) 设置API文档发布次数
 * @method string getApiDocUri() 获取API文档访问URI
 * @method void setApiDocUri(string $ApiDocUri) 设置API文档访问URI
 * @method string getSharePassword() 获取API文档分享密码
 * @method void setSharePassword(string $SharePassword) 设置API文档分享密码
 * @method string getUpdatedTime() 获取API文档更新时间
 * @method void setUpdatedTime(string $UpdatedTime) 设置API文档更新时间
 * @method string getServiceId() 获取服务ID
 * @method void setServiceId(string $ServiceId) 设置服务ID
 * @method string getEnvironment() 获取环境信息
 * @method void setEnvironment(string $Environment) 设置环境信息
 * @method array getApiIds() 获取生成API文档的API ID
 * @method void setApiIds(array $ApiIds) 设置生成API文档的API ID
 * @method string getServiceName() 获取服务名称
 * @method void setServiceName(string $ServiceName) 设置服务名称
 * @method array getApiNames() 获取生成API文档的API名称
 * @method void setApiNames(array $ApiNames) 设置生成API文档的API名称
 */
class APIDocInfo extends AbstractModel
{
    /**
     * @var string API文档ID
     */
    public $ApiDocId;

    /**
     * @var string API文档名称
     */
    public $ApiDocName;

    /**
     * @var string API文档构建状态
     */
    public $ApiDocStatus;

    /**
     * @var integer API文档API数量
     */
    public $ApiCount;

    /**
     * @var integer API文档查看次数
     */
    public $ViewCount;

    /**
     * @var integer API文档发布次数
     */
    public $ReleaseCount;

    /**
     * @var string API文档访问URI
     */
    public $ApiDocUri;

    /**
     * @var string API文档分享密码
     */
    public $SharePassword;

    /**
     * @var string API文档更新时间
     */
    public $UpdatedTime;

    /**
     * @var string 服务ID
     */
    public $ServiceId;

    /**
     * @var string 环境信息
     */
    public $Environment;

    /**
     * @var array 生成API文档的API ID
     */
    public $ApiIds;

    /**
     * @var string 服务名称
     */
    public $ServiceName;

    /**
     * @var array 生成API文档的API名称
     */
    public $ApiNames;

    /**
     * @param string $ApiDocId API文档ID
     * @param string $ApiDocName API文档名称
     * @param string $ApiDocStatus API文档构建状态
     * @param integer $ApiCount API文档API数量
     * @param integer $ViewCount API文档查看次数
     * @param integer $ReleaseCount API文档发布次数
     * @param string $ApiDocUri API文档访问URI
     * @param string $SharePassword API文档分享密码
     * @param string $UpdatedTime API文档更新时间
     * @param string $ServiceId 服务ID
     * @param string $Environment 环境信息
     * @param array $ApiIds 生成API文档的API ID
     * @param string $ServiceName 服务名称
     * @param array $ApiNames 生成API文档的API名称
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
        if (array_key_exists("ApiDocId",$param) and $param["ApiDocId"] !== null) {
            $this->ApiDocId = $param["ApiDocId"];
        }

        if (array_key_exists("ApiDocName",$param) and $param["ApiDocName"] !== null) {
            $this->ApiDocName = $param["ApiDocName"];
        }

        if (array_key_exists("ApiDocStatus",$param) and $param["ApiDocStatus"] !== null) {
            $this->ApiDocStatus = $param["ApiDocStatus"];
        }

        if (array_key_exists("ApiCount",$param) and $param["ApiCount"] !== null) {
            $this->ApiCount = $param["ApiCount"];
        }

        if (array_key_exists("ViewCount",$param) and $param["ViewCount"] !== null) {
            $this->ViewCount = $param["ViewCount"];
        }

        if (array_key_exists("ReleaseCount",$param) and $param["ReleaseCount"] !== null) {
            $this->ReleaseCount = $param["ReleaseCount"];
        }

        if (array_key_exists("ApiDocUri",$param) and $param["ApiDocUri"] !== null) {
            $this->ApiDocUri = $param["ApiDocUri"];
        }

        if (array_key_exists("SharePassword",$param) and $param["SharePassword"] !== null) {
            $this->SharePassword = $param["SharePassword"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("ApiIds",$param) and $param["ApiIds"] !== null) {
            $this->ApiIds = $param["ApiIds"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ApiNames",$param) and $param["ApiNames"] !== null) {
            $this->ApiNames = $param["ApiNames"];
        }
    }
}
