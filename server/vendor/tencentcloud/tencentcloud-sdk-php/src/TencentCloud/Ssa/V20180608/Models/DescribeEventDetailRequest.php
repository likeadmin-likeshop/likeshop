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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEventDetail请求参数结构体
 *
 * @method string getIndex() 获取事件索引名
 * @method void setIndex(string $Index) 设置事件索引名
 * @method string getId() 获取事件id
 * @method void setId(string $Id) 设置事件id
 * @method string getSource() 获取事件来源
 * @method void setSource(string $Source) 设置事件来源
 * @method integer getSubEventType() 获取事件子类型
 * @method void setSubEventType(integer $SubEventType) 设置事件子类型
 * @method string getName() 获取事件名称
 * @method void setName(string $Name) 设置事件名称
 */
class DescribeEventDetailRequest extends AbstractModel
{
    /**
     * @var string 事件索引名
     */
    public $Index;

    /**
     * @var string 事件id
     */
    public $Id;

    /**
     * @var string 事件来源
     */
    public $Source;

    /**
     * @var integer 事件子类型
     */
    public $SubEventType;

    /**
     * @var string 事件名称
     */
    public $Name;

    /**
     * @param string $Index 事件索引名
     * @param string $Id 事件id
     * @param string $Source 事件来源
     * @param integer $SubEventType 事件子类型
     * @param string $Name 事件名称
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("SubEventType",$param) and $param["SubEventType"] !== null) {
            $this->SubEventType = $param["SubEventType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
