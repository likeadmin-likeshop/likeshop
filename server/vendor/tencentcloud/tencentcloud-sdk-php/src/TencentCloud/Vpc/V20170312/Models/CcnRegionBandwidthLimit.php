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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网（CCN）地域出带宽上限
 *
 * @method string getRegion() 获取地域，例如：ap-guangzhou
 * @method void setRegion(string $Region) 设置地域，例如：ap-guangzhou
 * @method integer getBandwidthLimit() 获取出带宽上限，单位：Mbps
 * @method void setBandwidthLimit(integer $BandwidthLimit) 设置出带宽上限，单位：Mbps
 * @method boolean getIsBm() 获取是否黑石地域，默认`false`。
 * @method void setIsBm(boolean $IsBm) 设置是否黑石地域，默认`false`。
 * @method string getDstRegion() 获取目的地域，例如：ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstRegion(string $DstRegion) 设置目的地域，例如：ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDstIsBm() 获取目的地域是否为黑石地域，默认`false`。
 * @method void setDstIsBm(boolean $DstIsBm) 设置目的地域是否为黑石地域，默认`false`。
 */
class CcnRegionBandwidthLimit extends AbstractModel
{
    /**
     * @var string 地域，例如：ap-guangzhou
     */
    public $Region;

    /**
     * @var integer 出带宽上限，单位：Mbps
     */
    public $BandwidthLimit;

    /**
     * @var boolean 是否黑石地域，默认`false`。
     */
    public $IsBm;

    /**
     * @var string 目的地域，例如：ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstRegion;

    /**
     * @var boolean 目的地域是否为黑石地域，默认`false`。
     */
    public $DstIsBm;

    /**
     * @param string $Region 地域，例如：ap-guangzhou
     * @param integer $BandwidthLimit 出带宽上限，单位：Mbps
     * @param boolean $IsBm 是否黑石地域，默认`false`。
     * @param string $DstRegion 目的地域，例如：ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DstIsBm 目的地域是否为黑石地域，默认`false`。
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

        if (array_key_exists("BandwidthLimit",$param) and $param["BandwidthLimit"] !== null) {
            $this->BandwidthLimit = $param["BandwidthLimit"];
        }

        if (array_key_exists("IsBm",$param) and $param["IsBm"] !== null) {
            $this->IsBm = $param["IsBm"];
        }

        if (array_key_exists("DstRegion",$param) and $param["DstRegion"] !== null) {
            $this->DstRegion = $param["DstRegion"];
        }

        if (array_key_exists("DstIsBm",$param) and $param["DstIsBm"] !== null) {
            $this->DstIsBm = $param["DstIsBm"];
        }
    }
}
