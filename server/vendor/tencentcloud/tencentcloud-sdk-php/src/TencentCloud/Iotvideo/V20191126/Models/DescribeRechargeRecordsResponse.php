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
 * DescribeRechargeRecords返回参数结构体
 *
 * @method integer getAccountType() 获取账户类型 1:设备接入 2:云存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountType(integer $AccountType) 设置账户类型 1:设备接入 2:云存
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRecords() 获取充值记录列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecords(array $Records) 设置充值记录列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRechargeRecordsResponse extends AbstractModel
{
    /**
     * @var integer 账户类型 1:设备接入 2:云存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountType;

    /**
     * @var array 充值记录列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Records;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AccountType 账户类型 1:设备接入 2:云存
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Records 充值记录列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new RechargeRecord();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
