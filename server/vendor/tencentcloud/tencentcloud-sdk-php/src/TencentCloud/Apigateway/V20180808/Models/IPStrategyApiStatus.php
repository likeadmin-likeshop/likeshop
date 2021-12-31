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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ip策略绑定api详情
 *
 * @method integer getTotalCount() 获取环境绑定API数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置环境绑定API数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApiIdStatusSet() 获取环境绑定API详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiIdStatusSet(array $ApiIdStatusSet) 设置环境绑定API详情。
注意：此字段可能返回 null，表示取不到有效值。
 */
class IPStrategyApiStatus extends AbstractModel
{
    /**
     * @var integer 环境绑定API数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array 环境绑定API详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiIdStatusSet;

    /**
     * @param integer $TotalCount 环境绑定API数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApiIdStatusSet 环境绑定API详情。
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

        if (array_key_exists("ApiIdStatusSet",$param) and $param["ApiIdStatusSet"] !== null) {
            $this->ApiIdStatusSet = [];
            foreach ($param["ApiIdStatusSet"] as $key => $value){
                $obj = new IPStrategyApi();
                $obj->deserialize($value);
                array_push($this->ApiIdStatusSet, $obj);
            }
        }
    }
}
