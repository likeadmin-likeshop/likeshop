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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 存储着分配给该消费者的 partition 信息
 *
 * @method integer getVersion() 获取assingment版本信息
 * @method void setVersion(integer $Version) 设置assingment版本信息
 * @method array getTopics() 获取topic信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopics(array $Topics) 设置topic信息列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class Assignment extends AbstractModel
{
    /**
     * @var integer assingment版本信息
     */
    public $Version;

    /**
     * @var array topic信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topics;

    /**
     * @param integer $Version assingment版本信息
     * @param array $Topics topic信息列表
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new GroupInfoTopics();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }
    }
}
