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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配额资源
 *
 * @method integer getResourceType() 获取资源类型，1生成包、2服务部署、3别名、4游戏服务器队列、5实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(integer $ResourceType) 设置资源类型，1生成包、2服务部署、3别名、4游戏服务器队列、5实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHardLimit() 获取总额度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHardLimit(integer $HardLimit) 设置总额度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemaining() 获取剩余额度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemaining(integer $Remaining) 设置剩余额度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraInfo() 获取额外信息，可能为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(string $ExtraInfo) 设置额外信息，可能为空
注意：此字段可能返回 null，表示取不到有效值。
 */
class QuotaResource extends AbstractModel
{
    /**
     * @var integer 资源类型，1生成包、2服务部署、3别名、4游戏服务器队列、5实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var integer 总额度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HardLimit;

    /**
     * @var integer 剩余额度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remaining;

    /**
     * @var string 额外信息，可能为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @param integer $ResourceType 资源类型，1生成包、2服务部署、3别名、4游戏服务器队列、5实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HardLimit 总额度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Remaining 剩余额度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraInfo 额外信息，可能为空
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("HardLimit",$param) and $param["HardLimit"] !== null) {
            $this->HardLimit = $param["HardLimit"];
        }

        if (array_key_exists("Remaining",$param) and $param["Remaining"] !== null) {
            $this->Remaining = $param["Remaining"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }
    }
}
