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
 * 域名国内海外分地区特殊配置。
 *
 * @method MainlandConfig getMainland() 获取国内特殊配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainland(MainlandConfig $Mainland) 设置国内特殊配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OverseaConfig getOverseas() 获取海外特殊配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOverseas(OverseaConfig $Overseas) 设置海外特殊配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpecificConfig extends AbstractModel
{
    /**
     * @var MainlandConfig 国内特殊配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mainland;

    /**
     * @var OverseaConfig 海外特殊配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Overseas;

    /**
     * @param MainlandConfig $Mainland 国内特殊配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OverseaConfig $Overseas 海外特殊配置。
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
        if (array_key_exists("Mainland",$param) and $param["Mainland"] !== null) {
            $this->Mainland = new MainlandConfig();
            $this->Mainland->deserialize($param["Mainland"]);
        }

        if (array_key_exists("Overseas",$param) and $param["Overseas"] !== null) {
            $this->Overseas = new OverseaConfig();
            $this->Overseas->deserialize($param["Overseas"]);
        }
    }
}
