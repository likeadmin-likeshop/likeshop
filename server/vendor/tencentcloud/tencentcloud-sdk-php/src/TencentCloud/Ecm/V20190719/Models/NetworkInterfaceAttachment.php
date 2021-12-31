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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 弹性网卡绑定关系
 *
 * @method string getInstanceId() 获取云主机实例ID。
 * @method void setInstanceId(string $InstanceId) 设置云主机实例ID。
 * @method integer getDeviceIndex() 获取网卡在云主机实例内的序号。
 * @method void setDeviceIndex(integer $DeviceIndex) 设置网卡在云主机实例内的序号。
 * @method string getInstanceAccountId() 获取云主机所有者账户信息。
 * @method void setInstanceAccountId(string $InstanceAccountId) 设置云主机所有者账户信息。
 * @method string getAttachTime() 获取绑定时间。
 * @method void setAttachTime(string $AttachTime) 设置绑定时间。
 */
class NetworkInterfaceAttachment extends AbstractModel
{
    /**
     * @var string 云主机实例ID。
     */
    public $InstanceId;

    /**
     * @var integer 网卡在云主机实例内的序号。
     */
    public $DeviceIndex;

    /**
     * @var string 云主机所有者账户信息。
     */
    public $InstanceAccountId;

    /**
     * @var string 绑定时间。
     */
    public $AttachTime;

    /**
     * @param string $InstanceId 云主机实例ID。
     * @param integer $DeviceIndex 网卡在云主机实例内的序号。
     * @param string $InstanceAccountId 云主机所有者账户信息。
     * @param string $AttachTime 绑定时间。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DeviceIndex",$param) and $param["DeviceIndex"] !== null) {
            $this->DeviceIndex = $param["DeviceIndex"];
        }

        if (array_key_exists("InstanceAccountId",$param) and $param["InstanceAccountId"] !== null) {
            $this->InstanceAccountId = $param["InstanceAccountId"];
        }

        if (array_key_exists("AttachTime",$param) and $param["AttachTime"] !== null) {
            $this->AttachTime = $param["AttachTime"];
        }
    }
}
