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
 * DescribeConfig返回参数结构体
 *
 * @method NetworkStorageRange getNetworkStorageRange() 获取网络带宽硬盘大小的范围信息。
 * @method void setNetworkStorageRange(NetworkStorageRange $NetworkStorageRange) 设置网络带宽硬盘大小的范围信息。
 * @method array getImageWhiteSet() 获取镜像操作系统白名单。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageWhiteSet(array $ImageWhiteSet) 设置镜像操作系统白名单。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceNetworkLimitConfigs() 获取网络限额信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceNetworkLimitConfigs(array $InstanceNetworkLimitConfigs) 设置网络限额信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageLimitConfig getImageLimits() 获取镜像限额信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageLimits(ImageLimitConfig $ImageLimits) 设置镜像限额信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDefaultIPDirect() 获取默认是否IP直通，用于模块创建，虚机购买等具有直通参数场景时的默认参数。
 * @method void setDefaultIPDirect(boolean $DefaultIPDirect) 设置默认是否IP直通，用于模块创建，虚机购买等具有直通参数场景时的默认参数。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConfigResponse extends AbstractModel
{
    /**
     * @var NetworkStorageRange 网络带宽硬盘大小的范围信息。
     */
    public $NetworkStorageRange;

    /**
     * @var array 镜像操作系统白名单。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageWhiteSet;

    /**
     * @var array 网络限额信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceNetworkLimitConfigs;

    /**
     * @var ImageLimitConfig 镜像限额信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageLimits;

    /**
     * @var boolean 默认是否IP直通，用于模块创建，虚机购买等具有直通参数场景时的默认参数。
     */
    public $DefaultIPDirect;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param NetworkStorageRange $NetworkStorageRange 网络带宽硬盘大小的范围信息。
     * @param array $ImageWhiteSet 镜像操作系统白名单。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceNetworkLimitConfigs 网络限额信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageLimitConfig $ImageLimits 镜像限额信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DefaultIPDirect 默认是否IP直通，用于模块创建，虚机购买等具有直通参数场景时的默认参数。
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
        if (array_key_exists("NetworkStorageRange",$param) and $param["NetworkStorageRange"] !== null) {
            $this->NetworkStorageRange = new NetworkStorageRange();
            $this->NetworkStorageRange->deserialize($param["NetworkStorageRange"]);
        }

        if (array_key_exists("ImageWhiteSet",$param) and $param["ImageWhiteSet"] !== null) {
            $this->ImageWhiteSet = $param["ImageWhiteSet"];
        }

        if (array_key_exists("InstanceNetworkLimitConfigs",$param) and $param["InstanceNetworkLimitConfigs"] !== null) {
            $this->InstanceNetworkLimitConfigs = [];
            foreach ($param["InstanceNetworkLimitConfigs"] as $key => $value){
                $obj = new InstanceNetworkLimitConfig();
                $obj->deserialize($value);
                array_push($this->InstanceNetworkLimitConfigs, $obj);
            }
        }

        if (array_key_exists("ImageLimits",$param) and $param["ImageLimits"] !== null) {
            $this->ImageLimits = new ImageLimitConfig();
            $this->ImageLimits->deserialize($param["ImageLimits"]);
        }

        if (array_key_exists("DefaultIPDirect",$param) and $param["DefaultIPDirect"] !== null) {
            $this->DefaultIPDirect = $param["DefaultIPDirect"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
