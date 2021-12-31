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
 * DisIsolateDBInstances请求参数结构体
 *
 * @method array getDBInstanceIdSet() 获取资源ID列表
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) 设置资源ID列表
 * @method integer getPeriod() 获取包年包月实例解隔离时购买时常 以月为单位
 * @method void setPeriod(integer $Period) 设置包年包月实例解隔离时购买时常 以月为单位
 * @method boolean getAutoVoucher() 获取是否使用代金券：true-使用,false-不使用，默认不使用
 * @method void setAutoVoucher(boolean $AutoVoucher) 设置是否使用代金券：true-使用,false-不使用，默认不使用
 * @method array getVoucherIds() 获取代金券id列表
 * @method void setVoucherIds(array $VoucherIds) 设置代金券id列表
 */
class DisIsolateDBInstancesRequest extends AbstractModel
{
    /**
     * @var array 资源ID列表
     */
    public $DBInstanceIdSet;

    /**
     * @var integer 包年包月实例解隔离时购买时常 以月为单位
     */
    public $Period;

    /**
     * @var boolean 是否使用代金券：true-使用,false-不使用，默认不使用
     */
    public $AutoVoucher;

    /**
     * @var array 代金券id列表
     */
    public $VoucherIds;

    /**
     * @param array $DBInstanceIdSet 资源ID列表
     * @param integer $Period 包年包月实例解隔离时购买时常 以月为单位
     * @param boolean $AutoVoucher 是否使用代金券：true-使用,false-不使用，默认不使用
     * @param array $VoucherIds 代金券id列表
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
        if (array_key_exists("DBInstanceIdSet",$param) and $param["DBInstanceIdSet"] !== null) {
            $this->DBInstanceIdSet = $param["DBInstanceIdSet"];
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
