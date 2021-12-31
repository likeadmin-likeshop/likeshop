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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDBInstance请求参数结构体
 *
 * @method integer getMemory() 获取升级后的实例内存大小，单位GB
 * @method void setMemory(integer $Memory) 设置升级后的实例内存大小，单位GB
 * @method integer getStorage() 获取升级后的实例磁盘大小，单位GB
 * @method void setStorage(integer $Storage) 设置升级后的实例磁盘大小，单位GB
 * @method string getDBInstanceId() 获取实例ID，形如postgres-lnp6j617
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID，形如postgres-lnp6j617
 * @method integer getAutoVoucher() 获取是否自动使用代金券,1是,0否，默认不使用
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券,1是,0否，默认不使用
 * @method array getVoucherIds() 获取代金券ID列表，目前仅支持指定一张代金券
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID列表，目前仅支持指定一张代金券
 * @method integer getActivityId() 获取活动ID
 * @method void setActivityId(integer $ActivityId) 设置活动ID
 */
class UpgradeDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer 升级后的实例内存大小，单位GB
     */
    public $Memory;

    /**
     * @var integer 升级后的实例磁盘大小，单位GB
     */
    public $Storage;

    /**
     * @var string 实例ID，形如postgres-lnp6j617
     */
    public $DBInstanceId;

    /**
     * @var integer 是否自动使用代金券,1是,0否，默认不使用
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID列表，目前仅支持指定一张代金券
     */
    public $VoucherIds;

    /**
     * @var integer 活动ID
     */
    public $ActivityId;

    /**
     * @param integer $Memory 升级后的实例内存大小，单位GB
     * @param integer $Storage 升级后的实例磁盘大小，单位GB
     * @param string $DBInstanceId 实例ID，形如postgres-lnp6j617
     * @param integer $AutoVoucher 是否自动使用代金券,1是,0否，默认不使用
     * @param array $VoucherIds 代金券ID列表，目前仅支持指定一张代金券
     * @param integer $ActivityId 活动ID
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
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }
    }
}
