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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRechargeRecords请求参数结构体
 *
 * @method integer getAccountType() 获取账户类型 1:设备接入 2:云存。
 * @method void setAccountType(integer $AccountType) 设置账户类型 1:设备接入 2:云存。
 * @method integer getOffset() 获取从第几条记录开始显示, 默认值为0。
 * @method void setOffset(integer $Offset) 设置从第几条记录开始显示, 默认值为0。
 * @method integer getLimit() 获取总共查询多少条记录，默认为值50。
 * @method void setLimit(integer $Limit) 设置总共查询多少条记录，默认为值50。
 */
class DescribeRechargeRecordsRequest extends AbstractModel
{
    /**
     * @var integer 账户类型 1:设备接入 2:云存。
     */
    public $AccountType;

    /**
     * @var integer 从第几条记录开始显示, 默认值为0。
     */
    public $Offset;

    /**
     * @var integer 总共查询多少条记录，默认为值50。
     */
    public $Limit;

    /**
     * @param integer $AccountType 账户类型 1:设备接入 2:云存。
     * @param integer $Offset 从第几条记录开始显示, 默认值为0。
     * @param integer $Limit 总共查询多少条记录，默认为值50。
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
        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
