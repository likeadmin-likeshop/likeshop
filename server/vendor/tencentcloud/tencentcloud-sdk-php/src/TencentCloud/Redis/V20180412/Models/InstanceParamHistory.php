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
 * 实例参数修改历史
 *
 * @method string getParamName() 获取参数名称
 * @method void setParamName(string $ParamName) 设置参数名称
 * @method string getPreValue() 获取修改前值
 * @method void setPreValue(string $PreValue) 设置修改前值
 * @method string getNewValue() 获取修改后值
 * @method void setNewValue(string $NewValue) 设置修改后值
 * @method integer getStatus() 获取状态：1-参数配置修改中；2-参数配置修改成功；3-参数配置修改失败
 * @method void setStatus(integer $Status) 设置状态：1-参数配置修改中；2-参数配置修改成功；3-参数配置修改失败
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 */
class InstanceParamHistory extends AbstractModel
{
    /**
     * @var string 参数名称
     */
    public $ParamName;

    /**
     * @var string 修改前值
     */
    public $PreValue;

    /**
     * @var string 修改后值
     */
    public $NewValue;

    /**
     * @var integer 状态：1-参数配置修改中；2-参数配置修改成功；3-参数配置修改失败
     */
    public $Status;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @param string $ParamName 参数名称
     * @param string $PreValue 修改前值
     * @param string $NewValue 修改后值
     * @param integer $Status 状态：1-参数配置修改中；2-参数配置修改成功；3-参数配置修改失败
     * @param string $ModifyTime 修改时间
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

        if (array_key_exists("PreValue",$param) and $param["PreValue"] !== null) {
            $this->PreValue = $param["PreValue"];
        }

        if (array_key_exists("NewValue",$param) and $param["NewValue"] !== null) {
            $this->NewValue = $param["NewValue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
