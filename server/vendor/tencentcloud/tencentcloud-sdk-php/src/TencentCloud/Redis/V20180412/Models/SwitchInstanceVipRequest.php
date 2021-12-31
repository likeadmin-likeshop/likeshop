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
 * SwitchInstanceVip请求参数结构体
 *
 * @method string getSrcInstanceId() 获取源实例ID
 * @method void setSrcInstanceId(string $SrcInstanceId) 设置源实例ID
 * @method string getDstInstanceId() 获取目标实例ID
 * @method void setDstInstanceId(string $DstInstanceId) 设置目标实例ID
 * @method integer getTimeDelay() 获取单位为秒。源实例与目标实例间DTS已断开时间，如果DTS断开时间大于TimeDelay，则不切换VIP，建议尽量根据业务设置一个可接受的值。
 * @method void setTimeDelay(integer $TimeDelay) 设置单位为秒。源实例与目标实例间DTS已断开时间，如果DTS断开时间大于TimeDelay，则不切换VIP，建议尽量根据业务设置一个可接受的值。
 * @method integer getForceSwitch() 获取在DTS断开的情况下是否强制切换。1：强制切换，0：不强制切换
 * @method void setForceSwitch(integer $ForceSwitch) 设置在DTS断开的情况下是否强制切换。1：强制切换，0：不强制切换
 * @method string getSwitchTime() 获取now: 立即切换，syncComplete：等待同步完成后切换
 * @method void setSwitchTime(string $SwitchTime) 设置now: 立即切换，syncComplete：等待同步完成后切换
 */
class SwitchInstanceVipRequest extends AbstractModel
{
    /**
     * @var string 源实例ID
     */
    public $SrcInstanceId;

    /**
     * @var string 目标实例ID
     */
    public $DstInstanceId;

    /**
     * @var integer 单位为秒。源实例与目标实例间DTS已断开时间，如果DTS断开时间大于TimeDelay，则不切换VIP，建议尽量根据业务设置一个可接受的值。
     */
    public $TimeDelay;

    /**
     * @var integer 在DTS断开的情况下是否强制切换。1：强制切换，0：不强制切换
     */
    public $ForceSwitch;

    /**
     * @var string now: 立即切换，syncComplete：等待同步完成后切换
     */
    public $SwitchTime;

    /**
     * @param string $SrcInstanceId 源实例ID
     * @param string $DstInstanceId 目标实例ID
     * @param integer $TimeDelay 单位为秒。源实例与目标实例间DTS已断开时间，如果DTS断开时间大于TimeDelay，则不切换VIP，建议尽量根据业务设置一个可接受的值。
     * @param integer $ForceSwitch 在DTS断开的情况下是否强制切换。1：强制切换，0：不强制切换
     * @param string $SwitchTime now: 立即切换，syncComplete：等待同步完成后切换
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
        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("DstInstanceId",$param) and $param["DstInstanceId"] !== null) {
            $this->DstInstanceId = $param["DstInstanceId"];
        }

        if (array_key_exists("TimeDelay",$param) and $param["TimeDelay"] !== null) {
            $this->TimeDelay = $param["TimeDelay"];
        }

        if (array_key_exists("ForceSwitch",$param) and $param["ForceSwitch"] !== null) {
            $this->ForceSwitch = $param["ForceSwitch"];
        }

        if (array_key_exists("SwitchTime",$param) and $param["SwitchTime"] !== null) {
            $this->SwitchTime = $param["SwitchTime"];
        }
    }
}
