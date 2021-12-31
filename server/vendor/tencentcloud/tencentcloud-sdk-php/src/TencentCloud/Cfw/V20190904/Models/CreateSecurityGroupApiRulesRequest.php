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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSecurityGroupApiRules请求参数结构体
 *
 * @method array getData() 获取创建规则数据
 * @method void setData(array $Data) 设置创建规则数据
 * @method integer getDirection() 获取方向，0：出站，1：入站
 * @method void setDirection(integer $Direction) 设置方向，0：出站，1：入站
 * @method integer getType() 获取插入类型，0：后插，1：前插，2：中插
 * @method void setType(integer $Type) 设置插入类型，0：后插，1：前插，2：中插
 * @method string getArea() 获取腾讯云地域的英文简写
 * @method void setArea(string $Area) 设置腾讯云地域的英文简写
 */
class CreateSecurityGroupApiRulesRequest extends AbstractModel
{
    /**
     * @var array 创建规则数据
     */
    public $Data;

    /**
     * @var integer 方向，0：出站，1：入站
     */
    public $Direction;

    /**
     * @var integer 插入类型，0：后插，1：前插，2：中插
     */
    public $Type;

    /**
     * @var string 腾讯云地域的英文简写
     */
    public $Area;

    /**
     * @param array $Data 创建规则数据
     * @param integer $Direction 方向，0：出站，1：入站
     * @param integer $Type 插入类型，0：后插，1：前插，2：中插
     * @param string $Area 腾讯云地域的英文简写
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SecurityGroupApiRuleData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
