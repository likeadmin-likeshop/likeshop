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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，形如mssql-j8kv137v
 * @method void setInstanceId(string $InstanceId) 设置实例ID，形如mssql-j8kv137v
 * @method integer getPeriod() 获取续费多少个月，取值范围为1-48，默认为1
 * @method void setPeriod(integer $Period) 设置续费多少个月，取值范围为1-48，默认为1
 * @method integer getAutoVoucher() 获取是否自动使用代金券，0-不使用；1-使用；默认不实用
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券，0-不使用；1-使用；默认不实用
 * @method array getVoucherIds() 获取代金券ID数组，目前只支持使用1张代金券
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID数组，目前只支持使用1张代金券
 */
class RenewDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如mssql-j8kv137v
     */
    public $InstanceId;

    /**
     * @var integer 续费多少个月，取值范围为1-48，默认为1
     */
    public $Period;

    /**
     * @var integer 是否自动使用代金券，0-不使用；1-使用；默认不实用
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID数组，目前只支持使用1张代金券
     */
    public $VoucherIds;

    /**
     * @param string $InstanceId 实例ID，形如mssql-j8kv137v
     * @param integer $Period 续费多少个月，取值范围为1-48，默认为1
     * @param integer $AutoVoucher 是否自动使用代金券，0-不使用；1-使用；默认不实用
     * @param array $VoucherIds 代金券ID数组，目前只支持使用1张代金券
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

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }
    }
}
