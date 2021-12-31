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
 * DescribeAccountBalance返回参数结构体
 *
 * @method integer getAccountType() 获取账户类型 1=设备接入;2=云存。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountType(integer $AccountType) 设置账户类型 1=设备接入;2=云存。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBalance() 获取余额, 单位 : 分(人民币)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBalance(integer $Balance) 设置余额, 单位 : 分(人民币)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getState() 获取账户状态，1=正常；8=冻结；9=销户。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(integer $State) 设置账户状态，1=正常；8=冻结；9=销户。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastUpdateTime() 获取最后修改时间，UTC值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(integer $LastUpdateTime) 设置最后修改时间，UTC值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAccountBalanceResponse extends AbstractModel
{
    /**
     * @var integer 账户类型 1=设备接入;2=云存。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountType;

    /**
     * @var integer 余额, 单位 : 分(人民币)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Balance;

    /**
     * @var integer 账户状态，1=正常；8=冻结；9=销户。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var integer 最后修改时间，UTC值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AccountType 账户类型 1=设备接入;2=云存。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Balance 余额, 单位 : 分(人民币)。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $State 账户状态，1=正常；8=冻结；9=销户。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastUpdateTime 最后修改时间，UTC值。
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

        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = $param["Balance"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
