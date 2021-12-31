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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取自动删除策略
 *
 * @method integer getTotalCount() 获取总数目
 * @method void setTotalCount(integer $TotalCount) 设置总数目
 * @method array getStrategyInfo() 获取自动删除策略列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyInfo(array $StrategyInfo) 设置自动删除策略列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class AutoDelStrategyInfoResp extends AbstractModel
{
    /**
     * @var integer 总数目
     */
    public $TotalCount;

    /**
     * @var array 自动删除策略列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyInfo;

    /**
     * @param integer $TotalCount 总数目
     * @param array $StrategyInfo 自动删除策略列表
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("StrategyInfo",$param) and $param["StrategyInfo"] !== null) {
            $this->StrategyInfo = [];
            foreach ($param["StrategyInfo"] as $key => $value){
                $obj = new AutoDelStrategyInfo();
                $obj->deserialize($value);
                array_push($this->StrategyInfo, $obj);
            }
        }
    }
}
