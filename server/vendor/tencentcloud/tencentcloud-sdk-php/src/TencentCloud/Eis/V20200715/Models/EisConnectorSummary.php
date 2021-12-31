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
namespace TencentCloud\Eis\V20200715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 连接器概要信息
 *
 * @method string getConnectorName() 获取连接器名称
 * @method void setConnectorName(string $ConnectorName) 设置连接器名称
 * @method string getDisplayName() 获取连接器展示名称
 * @method void setDisplayName(string $DisplayName) 设置连接器展示名称
 * @method string getCompany() 获取连接器对应企业
 * @method void setCompany(string $Company) 设置连接器对应企业
 * @method string getProduct() 获取连接器对应产品
 * @method void setProduct(string $Product) 设置连接器对应产品
 * @method string getConnectorVersion() 获取连接器版本
 * @method void setConnectorVersion(string $ConnectorVersion) 设置连接器版本
 * @method integer getCreateTime() 获取连接器创建时间
 * @method void setCreateTime(integer $CreateTime) 设置连接器创建时间
 */
class EisConnectorSummary extends AbstractModel
{
    /**
     * @var string 连接器名称
     */
    public $ConnectorName;

    /**
     * @var string 连接器展示名称
     */
    public $DisplayName;

    /**
     * @var string 连接器对应企业
     */
    public $Company;

    /**
     * @var string 连接器对应产品
     */
    public $Product;

    /**
     * @var string 连接器版本
     */
    public $ConnectorVersion;

    /**
     * @var integer 连接器创建时间
     */
    public $CreateTime;

    /**
     * @param string $ConnectorName 连接器名称
     * @param string $DisplayName 连接器展示名称
     * @param string $Company 连接器对应企业
     * @param string $Product 连接器对应产品
     * @param string $ConnectorVersion 连接器版本
     * @param integer $CreateTime 连接器创建时间
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
        if (array_key_exists("ConnectorName",$param) and $param["ConnectorName"] !== null) {
            $this->ConnectorName = $param["ConnectorName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Company",$param) and $param["Company"] !== null) {
            $this->Company = $param["Company"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ConnectorVersion",$param) and $param["ConnectorVersion"] !== null) {
            $this->ConnectorVersion = $param["ConnectorVersion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
