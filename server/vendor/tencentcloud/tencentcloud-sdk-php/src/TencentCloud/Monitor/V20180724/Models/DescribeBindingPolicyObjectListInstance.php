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
 * 查询策略绑定对象列表接口返回的对象实例信息
 *
 * @method string getUniqueId() 获取对象唯一id
 * @method void setUniqueId(string $UniqueId) 设置对象唯一id
 * @method string getDimensions() 获取表示对象实例的维度集合，jsonObj字符串
 * @method void setDimensions(string $Dimensions) 设置表示对象实例的维度集合，jsonObj字符串
 * @method integer getIsShielded() 获取对象是否被屏蔽，0表示未屏蔽，1表示被屏蔽
 * @method void setIsShielded(integer $IsShielded) 设置对象是否被屏蔽，0表示未屏蔽，1表示被屏蔽
 * @method string getRegion() 获取对象所在的地域
 * @method void setRegion(string $Region) 设置对象所在的地域
 */
class DescribeBindingPolicyObjectListInstance extends AbstractModel
{
    /**
     * @var string 对象唯一id
     */
    public $UniqueId;

    /**
     * @var string 表示对象实例的维度集合，jsonObj字符串
     */
    public $Dimensions;

    /**
     * @var integer 对象是否被屏蔽，0表示未屏蔽，1表示被屏蔽
     */
    public $IsShielded;

    /**
     * @var string 对象所在的地域
     */
    public $Region;

    /**
     * @param string $UniqueId 对象唯一id
     * @param string $Dimensions 表示对象实例的维度集合，jsonObj字符串
     * @param integer $IsShielded 对象是否被屏蔽，0表示未屏蔽，1表示被屏蔽
     * @param string $Region 对象所在的地域
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
        if (array_key_exists("UniqueId",$param) and $param["UniqueId"] !== null) {
            $this->UniqueId = $param["UniqueId"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("IsShielded",$param) and $param["IsShielded"] !== null) {
            $this->IsShielded = $param["IsShielded"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
