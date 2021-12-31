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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例整型参数描述
 *
 * @method string getParamName() 获取参数名
 * @method void setParamName(string $ParamName) 设置参数名
 * @method string getValueType() 获取参数类型：integer
 * @method void setValueType(string $ValueType) 设置参数类型：integer
 * @method string getNeedRestart() 获取修改后是否需要重启：true，false
 * @method void setNeedRestart(string $NeedRestart) 设置修改后是否需要重启：true，false
 * @method string getDefaultValue() 获取参数默认值
 * @method void setDefaultValue(string $DefaultValue) 设置参数默认值
 * @method string getCurrentValue() 获取当前运行参数值
 * @method void setCurrentValue(string $CurrentValue) 设置当前运行参数值
 * @method string getTips() 获取参数说明
 * @method void setTips(string $Tips) 设置参数说明
 * @method string getMin() 获取参数最小值
 * @method void setMin(string $Min) 设置参数最小值
 * @method string getMax() 获取参数最大值
 * @method void setMax(string $Max) 设置参数最大值
 * @method integer getStatus() 获取参数状态, 1: 修改中， 2：修改完成
 * @method void setStatus(integer $Status) 设置参数状态, 1: 修改中， 2：修改完成
 * @method string getUnit() 获取参数单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(string $Unit) 设置参数单位
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceIntegerParam extends AbstractModel
{
    /**
     * @var string 参数名
     */
    public $ParamName;

    /**
     * @var string 参数类型：integer
     */
    public $ValueType;

    /**
     * @var string 修改后是否需要重启：true，false
     */
    public $NeedRestart;

    /**
     * @var string 参数默认值
     */
    public $DefaultValue;

    /**
     * @var string 当前运行参数值
     */
    public $CurrentValue;

    /**
     * @var string 参数说明
     */
    public $Tips;

    /**
     * @var string 参数最小值
     */
    public $Min;

    /**
     * @var string 参数最大值
     */
    public $Max;

    /**
     * @var integer 参数状态, 1: 修改中， 2：修改完成
     */
    public $Status;

    /**
     * @var string 参数单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @param string $ParamName 参数名
     * @param string $ValueType 参数类型：integer
     * @param string $NeedRestart 修改后是否需要重启：true，false
     * @param string $DefaultValue 参数默认值
     * @param string $CurrentValue 当前运行参数值
     * @param string $Tips 参数说明
     * @param string $Min 参数最小值
     * @param string $Max 参数最大值
     * @param integer $Status 参数状态, 1: 修改中， 2：修改完成
     * @param string $Unit 参数单位
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }
    }
}
