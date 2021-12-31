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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScdnTopData返回参数结构体
 *
 * @method array getTopTypeData() 获取WAF 攻击类型统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopTypeData(array $TopTypeData) 设置WAF 攻击类型统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTopIpData() 获取TOP 攻击源 IP 统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopIpData(array $TopIpData) 设置TOP 攻击源 IP 统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMode() 获取查询的SCDN类型，当前仅支持 waf
 * @method void setMode(string $Mode) 设置查询的SCDN类型，当前仅支持 waf
 * @method array getTopUrlData() 获取TOP URL 统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopUrlData(array $TopUrlData) 设置TOP URL 统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeScdnTopDataResponse extends AbstractModel
{
    /**
     * @var array WAF 攻击类型统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopTypeData;

    /**
     * @var array TOP 攻击源 IP 统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopIpData;

    /**
     * @var string 查询的SCDN类型，当前仅支持 waf
     */
    public $Mode;

    /**
     * @var array TOP URL 统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopUrlData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $TopTypeData WAF 攻击类型统计
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TopIpData TOP 攻击源 IP 统计
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mode 查询的SCDN类型，当前仅支持 waf
     * @param array $TopUrlData TOP URL 统计
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
        if (array_key_exists("TopTypeData",$param) and $param["TopTypeData"] !== null) {
            $this->TopTypeData = [];
            foreach ($param["TopTypeData"] as $key => $value){
                $obj = new ScdnTypeData();
                $obj->deserialize($value);
                array_push($this->TopTypeData, $obj);
            }
        }

        if (array_key_exists("TopIpData",$param) and $param["TopIpData"] !== null) {
            $this->TopIpData = [];
            foreach ($param["TopIpData"] as $key => $value){
                $obj = new ScdnTopData();
                $obj->deserialize($value);
                array_push($this->TopIpData, $obj);
            }
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("TopUrlData",$param) and $param["TopUrlData"] !== null) {
            $this->TopUrlData = [];
            foreach ($param["TopUrlData"] as $key => $value){
                $obj = new ScdnTopUrlData();
                $obj->deserialize($value);
                array_push($this->TopUrlData, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
