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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewDomainBatch请求参数结构体
 *
 * @method integer getPeriod() 获取域名续费的年限。
 * @method void setPeriod(integer $Period) 设置域名续费的年限。
 * @method array getDomains() 获取批量续费的域名。
 * @method void setDomains(array $Domains) 设置批量续费的域名。
 * @method integer getPayMode() 获取付费模式 0手动在线付费，1使用余额付费。
 * @method void setPayMode(integer $PayMode) 设置付费模式 0手动在线付费，1使用余额付费。
 * @method integer getAutoRenewFlag() 获取自动续费开关。有三个可选值：
0 表示关闭，不自动续费
1 表示开启，将自动续费
2 表示不处理，保留域名原有状态（默认值）
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费开关。有三个可选值：
0 表示关闭，不自动续费
1 表示开启，将自动续费
2 表示不处理，保留域名原有状态（默认值）
 */
class RenewDomainBatchRequest extends AbstractModel
{
    /**
     * @var integer 域名续费的年限。
     */
    public $Period;

    /**
     * @var array 批量续费的域名。
     */
    public $Domains;

    /**
     * @var integer 付费模式 0手动在线付费，1使用余额付费。
     */
    public $PayMode;

    /**
     * @var integer 自动续费开关。有三个可选值：
0 表示关闭，不自动续费
1 表示开启，将自动续费
2 表示不处理，保留域名原有状态（默认值）
     */
    public $AutoRenewFlag;

    /**
     * @param integer $Period 域名续费的年限。
     * @param array $Domains 批量续费的域名。
     * @param integer $PayMode 付费模式 0手动在线付费，1使用余额付费。
     * @param integer $AutoRenewFlag 自动续费开关。有三个可选值：
0 表示关闭，不自动续费
1 表示开启，将自动续费
2 表示不处理，保留域名原有状态（默认值）
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
