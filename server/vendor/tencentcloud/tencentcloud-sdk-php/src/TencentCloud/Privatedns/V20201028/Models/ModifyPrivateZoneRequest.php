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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPrivateZone请求参数结构体
 *
 * @method string getZoneId() 获取私有域ID
 * @method void setZoneId(string $ZoneId) 设置私有域ID
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getDnsForwardStatus() 获取是否开启子域名递归, ENABLED， DISABLED
 * @method void setDnsForwardStatus(string $DnsForwardStatus) 设置是否开启子域名递归, ENABLED， DISABLED
 */
class ModifyPrivateZoneRequest extends AbstractModel
{
    /**
     * @var string 私有域ID
     */
    public $ZoneId;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 是否开启子域名递归, ENABLED， DISABLED
     */
    public $DnsForwardStatus;

    /**
     * @param string $ZoneId 私有域ID
     * @param string $Remark 备注
     * @param string $DnsForwardStatus 是否开启子域名递归, ENABLED， DISABLED
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("DnsForwardStatus",$param) and $param["DnsForwardStatus"] !== null) {
            $this->DnsForwardStatus = $param["DnsForwardStatus"];
        }
    }
}
