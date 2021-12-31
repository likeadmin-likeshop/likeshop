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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 死信队列参数
 *
 * @method string getType() 获取死信队列模式
 * @method void setType(string $Type) 设置死信队列模式
 * @method string getName() 获取死信队列名称
 * @method void setName(string $Name) 设置死信队列名称
 * @method string getFilterType() 获取死信队列主题模式的标签形式
 * @method void setFilterType(string $FilterType) 设置死信队列主题模式的标签形式
 */
class DeadLetterConfig extends AbstractModel
{
    /**
     * @var string 死信队列模式
     */
    public $Type;

    /**
     * @var string 死信队列名称
     */
    public $Name;

    /**
     * @var string 死信队列主题模式的标签形式
     */
    public $FilterType;

    /**
     * @param string $Type 死信队列模式
     * @param string $Name 死信队列名称
     * @param string $FilterType 死信队列主题模式的标签形式
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }
    }
}
