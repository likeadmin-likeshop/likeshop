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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例参数的详细描述
 *
 * @method string getName() 获取参数名称
 * @method void setName(string $Name) 设置参数名称
 * @method string getParamType() 获取参数类型
 * @method void setParamType(string $ParamType) 设置参数类型
 * @method string getDefault() 获取参数默认值
 * @method void setDefault(string $Default) 设置参数默认值
 * @method string getDescription() 获取参数描述
 * @method void setDescription(string $Description) 设置参数描述
 * @method string getCurrentValue() 获取参数当前值
 * @method void setCurrentValue(string $CurrentValue) 设置参数当前值
 * @method integer getNeedReboot() 获取修改参数后，是否需要重启数据库以使参数生效。可能的值包括：0-不需要重启；1-需要重启
 * @method void setNeedReboot(integer $NeedReboot) 设置修改参数后，是否需要重启数据库以使参数生效。可能的值包括：0-不需要重启；1-需要重启
 * @method integer getMax() 获取参数允许的最大值
 * @method void setMax(integer $Max) 设置参数允许的最大值
 * @method integer getMin() 获取参数允许的最小值
 * @method void setMin(integer $Min) 设置参数允许的最小值
 * @method array getEnumValue() 获取参数的可选枚举值。如果为非枚举参数，则为空
 * @method void setEnumValue(array $EnumValue) 设置参数的可选枚举值。如果为非枚举参数，则为空
 */
class ParameterDetail extends AbstractModel
{
    /**
     * @var string 参数名称
     */
    public $Name;

    /**
     * @var string 参数类型
     */
    public $ParamType;

    /**
     * @var string 参数默认值
     */
    public $Default;

    /**
     * @var string 参数描述
     */
    public $Description;

    /**
     * @var string 参数当前值
     */
    public $CurrentValue;

    /**
     * @var integer 修改参数后，是否需要重启数据库以使参数生效。可能的值包括：0-不需要重启；1-需要重启
     */
    public $NeedReboot;

    /**
     * @var integer 参数允许的最大值
     */
    public $Max;

    /**
     * @var integer 参数允许的最小值
     */
    public $Min;

    /**
     * @var array 参数的可选枚举值。如果为非枚举参数，则为空
     */
    public $EnumValue;

    /**
     * @param string $Name 参数名称
     * @param string $ParamType 参数类型
     * @param string $Default 参数默认值
     * @param string $Description 参数描述
     * @param string $CurrentValue 参数当前值
     * @param integer $NeedReboot 修改参数后，是否需要重启数据库以使参数生效。可能的值包括：0-不需要重启；1-需要重启
     * @param integer $Max 参数允许的最大值
     * @param integer $Min 参数允许的最小值
     * @param array $EnumValue 参数的可选枚举值。如果为非枚举参数，则为空
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("NeedReboot",$param) and $param["NeedReboot"] !== null) {
            $this->NeedReboot = $param["NeedReboot"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("EnumValue",$param) and $param["EnumValue"] !== null) {
            $this->EnumValue = $param["EnumValue"];
        }
    }
}
