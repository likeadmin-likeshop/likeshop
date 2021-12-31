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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDevices请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method integer getNumber() 获取创建设备的数量，数量范围1-100
 * @method void setNumber(integer $Number) 设置创建设备的数量，数量范围1-100
 * @method string getNamePrefix() 获取设备名称前缀，支持英文、数字，不超过10字符
 * @method void setNamePrefix(string $NamePrefix) 设置设备名称前缀，支持英文、数字，不超过10字符
 * @method string getOperator() 获取操作人
 * @method void setOperator(string $Operator) 设置操作人
 */
class CreateDevicesRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var integer 创建设备的数量，数量范围1-100
     */
    public $Number;

    /**
     * @var string 设备名称前缀，支持英文、数字，不超过10字符
     */
    public $NamePrefix;

    /**
     * @var string 操作人
     */
    public $Operator;

    /**
     * @param string $ProductId 产品ID
     * @param integer $Number 创建设备的数量，数量范围1-100
     * @param string $NamePrefix 设备名称前缀，支持英文、数字，不超过10字符
     * @param string $Operator 操作人
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("NamePrefix",$param) and $param["NamePrefix"] !== null) {
            $this->NamePrefix = $param["NamePrefix"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
