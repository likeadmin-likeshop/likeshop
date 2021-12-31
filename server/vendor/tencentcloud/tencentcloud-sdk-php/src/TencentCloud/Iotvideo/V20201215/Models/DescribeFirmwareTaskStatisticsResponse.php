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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFirmwareTaskStatistics返回参数结构体
 *
 * @method integer getSuccessTotal() 获取升级成功的设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessTotal(integer $SuccessTotal) 设置升级成功的设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailureTotal() 获取升级失败的设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailureTotal(integer $FailureTotal) 设置升级失败的设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpgradingTotal() 获取正在升级的设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpgradingTotal(integer $UpgradingTotal) 设置正在升级的设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFirmwareTaskStatisticsResponse extends AbstractModel
{
    /**
     * @var integer 升级成功的设备总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessTotal;

    /**
     * @var integer 升级失败的设备总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailureTotal;

    /**
     * @var integer 正在升级的设备总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpgradingTotal;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SuccessTotal 升级成功的设备总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailureTotal 升级失败的设备总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpgradingTotal 正在升级的设备总数
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
        if (array_key_exists("SuccessTotal",$param) and $param["SuccessTotal"] !== null) {
            $this->SuccessTotal = $param["SuccessTotal"];
        }

        if (array_key_exists("FailureTotal",$param) and $param["FailureTotal"] !== null) {
            $this->FailureTotal = $param["FailureTotal"];
        }

        if (array_key_exists("UpgradingTotal",$param) and $param["UpgradingTotal"] !== null) {
            $this->UpgradingTotal = $param["UpgradingTotal"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
