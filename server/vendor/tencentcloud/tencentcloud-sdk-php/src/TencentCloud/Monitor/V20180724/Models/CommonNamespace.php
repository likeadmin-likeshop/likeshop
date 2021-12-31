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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 统一的命名空间信息
 *
 * @method string getId() 获取命名空间标示
 * @method void setId(string $Id) 设置命名空间标示
 * @method string getName() 获取命名空间名称
 * @method void setName(string $Name) 设置命名空间名称
 * @method string getValue() 获取命名空间值
 * @method void setValue(string $Value) 设置命名空间值
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getConfig() 获取配置信息
 * @method void setConfig(string $Config) 设置配置信息
 * @method array getAvailableRegions() 获取支持地域列表
 * @method void setAvailableRegions(array $AvailableRegions) 设置支持地域列表
 * @method integer getSortId() 获取排序Id
 * @method void setSortId(integer $SortId) 设置排序Id
 * @method string getDashboardId() 获取Dashboard中的唯一表示
 * @method void setDashboardId(string $DashboardId) 设置Dashboard中的唯一表示
 */
class CommonNamespace extends AbstractModel
{
    /**
     * @var string 命名空间标示
     */
    public $Id;

    /**
     * @var string 命名空间名称
     */
    public $Name;

    /**
     * @var string 命名空间值
     */
    public $Value;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 配置信息
     */
    public $Config;

    /**
     * @var array 支持地域列表
     */
    public $AvailableRegions;

    /**
     * @var integer 排序Id
     */
    public $SortId;

    /**
     * @var string Dashboard中的唯一表示
     */
    public $DashboardId;

    /**
     * @param string $Id 命名空间标示
     * @param string $Name 命名空间名称
     * @param string $Value 命名空间值
     * @param string $ProductName 产品名称
     * @param string $Config 配置信息
     * @param array $AvailableRegions 支持地域列表
     * @param integer $SortId 排序Id
     * @param string $DashboardId Dashboard中的唯一表示
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("AvailableRegions",$param) and $param["AvailableRegions"] !== null) {
            $this->AvailableRegions = $param["AvailableRegions"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("DashboardId",$param) and $param["DashboardId"] !== null) {
            $this->DashboardId = $param["DashboardId"];
        }
    }
}
