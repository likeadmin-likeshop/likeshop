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
 * ModifyDeviceProperty请求参数结构体
 *
 * @method string getTid() 获取设备TID
 * @method void setTid(string $Tid) 设置设备TID
 * @method boolean getWakeup() 获取如果设备处于休眠状态，是否唤醒设备
 * @method void setWakeup(boolean $Wakeup) 设置如果设备处于休眠状态，是否唤醒设备
 * @method string getBranch() 获取物模型的分支路径
 * @method void setBranch(string $Branch) 设置物模型的分支路径
 * @method string getValue() 获取写入的物模型数据，如果是json需要转义成字符串
 * @method void setValue(string $Value) 设置写入的物模型数据，如果是json需要转义成字符串
 * @method boolean getIsNum() 获取Value字段是否为数值（float、int）
 * @method void setIsNum(boolean $IsNum) 设置Value字段是否为数值（float、int）
 */
class ModifyDevicePropertyRequest extends AbstractModel
{
    /**
     * @var string 设备TID
     */
    public $Tid;

    /**
     * @var boolean 如果设备处于休眠状态，是否唤醒设备
     */
    public $Wakeup;

    /**
     * @var string 物模型的分支路径
     */
    public $Branch;

    /**
     * @var string 写入的物模型数据，如果是json需要转义成字符串
     */
    public $Value;

    /**
     * @var boolean Value字段是否为数值（float、int）
     */
    public $IsNum;

    /**
     * @param string $Tid 设备TID
     * @param boolean $Wakeup 如果设备处于休眠状态，是否唤醒设备
     * @param string $Branch 物模型的分支路径
     * @param string $Value 写入的物模型数据，如果是json需要转义成字符串
     * @param boolean $IsNum Value字段是否为数值（float、int）
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
        if (array_key_exists("Tid",$param) and $param["Tid"] !== null) {
            $this->Tid = $param["Tid"];
        }

        if (array_key_exists("Wakeup",$param) and $param["Wakeup"] !== null) {
            $this->Wakeup = $param["Wakeup"];
        }

        if (array_key_exists("Branch",$param) and $param["Branch"] !== null) {
            $this->Branch = $param["Branch"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("IsNum",$param) and $param["IsNum"] !== null) {
            $this->IsNum = $param["IsNum"];
        }
    }
}
