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
 * 密钥列表
 *
 * @method integer getTotalCount() 获取符合条件的 API 密钥数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的 API 密钥数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApiKeySet() 获取API 密钥列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiKeySet(array $ApiKeySet) 设置API 密钥列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiKeysStatus extends AbstractModel
{
    /**
     * @var integer 符合条件的 API 密钥数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array API 密钥列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiKeySet;

    /**
     * @param integer $TotalCount 符合条件的 API 密钥数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApiKeySet API 密钥列表。
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

        if (array_key_exists("ApiKeySet",$param) and $param["ApiKeySet"] !== null) {
            $this->ApiKeySet = [];
            foreach ($param["ApiKeySet"] as $key => $value){
                $obj = new ApiKey();
                $obj->deserialize($value);
                array_push($this->ApiKeySet, $obj);
            }
        }
    }
}
