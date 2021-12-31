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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAddressesBandwidth请求参数结构体
 *
 * @method array getAddressIds() 获取EIP唯一标识ID列表，形如'eip-xxxx'
 * @method void setAddressIds(array $AddressIds) 设置EIP唯一标识ID列表，形如'eip-xxxx'
 * @method integer getInternetMaxBandwidthOut() 获取调整带宽目标值
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置调整带宽目标值
 * @method string getStartTime() 获取包月带宽起始时间(已废弃，输入无效)
 * @method void setStartTime(string $StartTime) 设置包月带宽起始时间(已废弃，输入无效)
 * @method string getEndTime() 获取包月带宽结束时间(已废弃，输入无效)
 * @method void setEndTime(string $EndTime) 设置包月带宽结束时间(已废弃，输入无效)
 */
class ModifyAddressesBandwidthRequest extends AbstractModel
{
    /**
     * @var array EIP唯一标识ID列表，形如'eip-xxxx'
     */
    public $AddressIds;

    /**
     * @var integer 调整带宽目标值
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 包月带宽起始时间(已废弃，输入无效)
     */
    public $StartTime;

    /**
     * @var string 包月带宽结束时间(已废弃，输入无效)
     */
    public $EndTime;

    /**
     * @param array $AddressIds EIP唯一标识ID列表，形如'eip-xxxx'
     * @param integer $InternetMaxBandwidthOut 调整带宽目标值
     * @param string $StartTime 包月带宽起始时间(已废弃，输入无效)
     * @param string $EndTime 包月带宽结束时间(已废弃，输入无效)
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
        if (array_key_exists("AddressIds",$param) and $param["AddressIds"] !== null) {
            $this->AddressIds = $param["AddressIds"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
