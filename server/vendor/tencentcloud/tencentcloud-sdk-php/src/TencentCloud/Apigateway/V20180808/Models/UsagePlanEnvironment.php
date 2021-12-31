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
 * 使用计划绑定环境详情。
 *
 * @method string getServiceId() 获取绑定的服务唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceId(string $ServiceId) 设置绑定的服务唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiId() 获取API 的唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiId(string $ApiId) 设置API 的唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiName() 获取API 的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiName(string $ApiName) 设置API 的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取API 的路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置API 的路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMethod() 获取API 的方法。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(string $Method) 设置API 的方法。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvironment() 获取已经绑定的环境名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironment(string $Environment) 设置已经绑定的环境名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInUseRequestNum() 获取已经使用的配额。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInUseRequestNum(integer $InUseRequestNum) 设置已经使用的配额。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRequestNum() 获取最大请求量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRequestNum(integer $MaxRequestNum) 设置最大请求量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRequestNumPreSec() 获取每秒最大请求次数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRequestNumPreSec(integer $MaxRequestNumPreSec) 设置每秒最大请求次数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取服务名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置服务名称。
注意：此字段可能返回 null，表示取不到有效值。
 */
class UsagePlanEnvironment extends AbstractModel
{
    /**
     * @var string 绑定的服务唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceId;

    /**
     * @var string API 的唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiId;

    /**
     * @var string API 的名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiName;

    /**
     * @var string API 的路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string API 的方法。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var string 已经绑定的环境名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Environment;

    /**
     * @var integer 已经使用的配额。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InUseRequestNum;

    /**
     * @var integer 最大请求量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRequestNum;

    /**
     * @var integer 每秒最大请求次数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRequestNumPreSec;

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
     * @var string 服务名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @param string $ServiceId 绑定的服务唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiId API 的唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiName API 的名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path API 的路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Method API 的方法。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Environment 已经绑定的环境名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InUseRequestNum 已经使用的配额。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRequestNum 最大请求量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRequestNumPreSec 每秒最大请求次数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName 服务名称。
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

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("InUseRequestNum",$param) and $param["InUseRequestNum"] !== null) {
            $this->InUseRequestNum = $param["InUseRequestNum"];
        }

        if (array_key_exists("MaxRequestNum",$param) and $param["MaxRequestNum"] !== null) {
            $this->MaxRequestNum = $param["MaxRequestNum"];
        }

        if (array_key_exists("MaxRequestNumPreSec",$param) and $param["MaxRequestNumPreSec"] !== null) {
            $this->MaxRequestNumPreSec = $param["MaxRequestNumPreSec"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
