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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * region维度的网络峰值信息
 *
 * @method string getRegion() 获取region信息
 * @method void setRegion(string $Region) 设置region信息
 * @method array getPeakNetworkSet() 获取网络峰值集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeakNetworkSet(array $PeakNetworkSet) 设置网络峰值集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class PeakNetworkRegionInfo extends AbstractModel
{
    /**
     * @var string region信息
     */
    public $Region;

    /**
     * @var array 网络峰值集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeakNetworkSet;

    /**
     * @param string $Region region信息
     * @param array $PeakNetworkSet 网络峰值集合
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PeakNetworkSet",$param) and $param["PeakNetworkSet"] !== null) {
            $this->PeakNetworkSet = [];
            foreach ($param["PeakNetworkSet"] as $key => $value){
                $obj = new PeakNetwork();
                $obj->deserialize($value);
                array_push($this->PeakNetworkSet, $obj);
            }
        }
    }
}
