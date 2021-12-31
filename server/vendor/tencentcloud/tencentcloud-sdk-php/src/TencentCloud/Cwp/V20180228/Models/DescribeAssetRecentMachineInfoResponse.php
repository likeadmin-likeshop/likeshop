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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetRecentMachineInfo返回参数结构体
 *
 * @method array getTotalList() 获取总数量列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalList(array $TotalList) 设置总数量列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLiveList() 获取在线数量列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveList(array $LiveList) 设置在线数量列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOfflineList() 获取离线数量列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineList(array $OfflineList) 设置离线数量列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRiskList() 获取风险数量列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskList(array $RiskList) 设置风险数量列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetRecentMachineInfoResponse extends AbstractModel
{
    /**
     * @var array 总数量列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalList;

    /**
     * @var array 在线数量列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveList;

    /**
     * @var array 离线数量列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineList;

    /**
     * @var array 风险数量列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $TotalList 总数量列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LiveList 在线数量列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OfflineList 离线数量列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RiskList 风险数量列表
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
        if (array_key_exists("TotalList",$param) and $param["TotalList"] !== null) {
            $this->TotalList = [];
            foreach ($param["TotalList"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->TotalList, $obj);
            }
        }

        if (array_key_exists("LiveList",$param) and $param["LiveList"] !== null) {
            $this->LiveList = [];
            foreach ($param["LiveList"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->LiveList, $obj);
            }
        }

        if (array_key_exists("OfflineList",$param) and $param["OfflineList"] !== null) {
            $this->OfflineList = [];
            foreach ($param["OfflineList"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->OfflineList, $obj);
            }
        }

        if (array_key_exists("RiskList",$param) and $param["RiskList"] !== null) {
            $this->RiskList = [];
            foreach ($param["RiskList"] as $key => $value){
                $obj = new AssetKeyVal();
                $obj->deserialize($value);
                array_push($this->RiskList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
