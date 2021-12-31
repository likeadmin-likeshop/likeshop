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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分片参数
 *
 * @method integer getShardKey() 获取分片参数 KEY，整形, 范围 [1,1000]
 * @method void setShardKey(integer $ShardKey) 设置分片参数 KEY，整形, 范围 [1,1000]
 * @method string getShardValue() 获取分片参数 VALUE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShardValue(string $ShardValue) 设置分片参数 VALUE
注意：此字段可能返回 null，表示取不到有效值。
 */
class ShardArgument extends AbstractModel
{
    /**
     * @var integer 分片参数 KEY，整形, 范围 [1,1000]
     */
    public $ShardKey;

    /**
     * @var string 分片参数 VALUE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShardValue;

    /**
     * @param integer $ShardKey 分片参数 KEY，整形, 范围 [1,1000]
     * @param string $ShardValue 分片参数 VALUE
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
        if (array_key_exists("ShardKey",$param) and $param["ShardKey"] !== null) {
            $this->ShardKey = $param["ShardKey"];
        }

        if (array_key_exists("ShardValue",$param) and $param["ShardValue"] !== null) {
            $this->ShardValue = $param["ShardValue"];
        }
    }
}
