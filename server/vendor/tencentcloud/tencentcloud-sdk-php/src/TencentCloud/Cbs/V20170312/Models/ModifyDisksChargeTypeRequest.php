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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDisksChargeType请求参数结构体
 *
 * @method array getDiskIds() 获取一个或多个待操作的云硬盘ID。每次请求批量云盘上限为100。
 * @method void setDiskIds(array $DiskIds) 设置一个或多个待操作的云硬盘ID。每次请求批量云盘上限为100。
 * @method DiskChargePrepaid getDiskChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。
 * @method boolean getDiskChargePostpaid() 获取后付费模式
 * @method void setDiskChargePostpaid(boolean $DiskChargePostpaid) 设置后付费模式
 */
class ModifyDisksChargeTypeRequest extends AbstractModel
{
    /**
     * @var array 一个或多个待操作的云硬盘ID。每次请求批量云盘上限为100。
     */
    public $DiskIds;

    /**
     * @var DiskChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。
     */
    public $DiskChargePrepaid;

    /**
     * @var boolean 后付费模式
     */
    public $DiskChargePostpaid;

    /**
     * @param array $DiskIds 一个或多个待操作的云硬盘ID。每次请求批量云盘上限为100。
     * @param DiskChargePrepaid $DiskChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。
     * @param boolean $DiskChargePostpaid 后付费模式
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new DiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("DiskChargePostpaid",$param) and $param["DiskChargePostpaid"] !== null) {
            $this->DiskChargePostpaid = $param["DiskChargePostpaid"];
        }
    }
}
