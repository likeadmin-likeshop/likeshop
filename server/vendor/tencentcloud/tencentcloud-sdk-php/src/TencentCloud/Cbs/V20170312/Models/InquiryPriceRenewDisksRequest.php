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
 * InquiryPriceRenewDisks请求参数结构体
 *
 * @method array getDiskIds() 获取云硬盘ID， 通过[DescribeDisks](/document/product/362/16315)接口查询。
 * @method void setDiskIds(array $DiskIds) 设置云硬盘ID， 通过[DescribeDisks](/document/product/362/16315)接口查询。
 * @method array getDiskChargePrepaids() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月云盘的购买时长。如果在该参数中指定CurInstanceDeadline，则会按对齐到子机到期时间来续费。如果是批量续费询价，该参数与Disks参数一一对应，元素数量需保持一致。
 * @method void setDiskChargePrepaids(array $DiskChargePrepaids) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月云盘的购买时长。如果在该参数中指定CurInstanceDeadline，则会按对齐到子机到期时间来续费。如果是批量续费询价，该参数与Disks参数一一对应，元素数量需保持一致。
 * @method string getNewDeadline() 获取指定云盘新的到期时间，形式如：2017-12-17 00:00:00。参数`NewDeadline`和`DiskChargePrepaids`是两种指定询价时长的方式，两者必传一个。
 * @method void setNewDeadline(string $NewDeadline) 设置指定云盘新的到期时间，形式如：2017-12-17 00:00:00。参数`NewDeadline`和`DiskChargePrepaids`是两种指定询价时长的方式，两者必传一个。
 * @method integer getProjectId() 获取云盘所属项目ID。 如传入则仅用于鉴权。
 * @method void setProjectId(integer $ProjectId) 设置云盘所属项目ID。 如传入则仅用于鉴权。
 */
class InquiryPriceRenewDisksRequest extends AbstractModel
{
    /**
     * @var array 云硬盘ID， 通过[DescribeDisks](/document/product/362/16315)接口查询。
     */
    public $DiskIds;

    /**
     * @var array 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月云盘的购买时长。如果在该参数中指定CurInstanceDeadline，则会按对齐到子机到期时间来续费。如果是批量续费询价，该参数与Disks参数一一对应，元素数量需保持一致。
     */
    public $DiskChargePrepaids;

    /**
     * @var string 指定云盘新的到期时间，形式如：2017-12-17 00:00:00。参数`NewDeadline`和`DiskChargePrepaids`是两种指定询价时长的方式，两者必传一个。
     */
    public $NewDeadline;

    /**
     * @var integer 云盘所属项目ID。 如传入则仅用于鉴权。
     */
    public $ProjectId;

    /**
     * @param array $DiskIds 云硬盘ID， 通过[DescribeDisks](/document/product/362/16315)接口查询。
     * @param array $DiskChargePrepaids 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月云盘的购买时长。如果在该参数中指定CurInstanceDeadline，则会按对齐到子机到期时间来续费。如果是批量续费询价，该参数与Disks参数一一对应，元素数量需保持一致。
     * @param string $NewDeadline 指定云盘新的到期时间，形式如：2017-12-17 00:00:00。参数`NewDeadline`和`DiskChargePrepaids`是两种指定询价时长的方式，两者必传一个。
     * @param integer $ProjectId 云盘所属项目ID。 如传入则仅用于鉴权。
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

        if (array_key_exists("DiskChargePrepaids",$param) and $param["DiskChargePrepaids"] !== null) {
            $this->DiskChargePrepaids = [];
            foreach ($param["DiskChargePrepaids"] as $key => $value){
                $obj = new DiskChargePrepaid();
                $obj->deserialize($value);
                array_push($this->DiskChargePrepaids, $obj);
            }
        }

        if (array_key_exists("NewDeadline",$param) and $param["NewDeadline"] !== null) {
            $this->NewDeadline = $param["NewDeadline"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
