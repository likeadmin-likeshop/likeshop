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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生产者
 *
 * @method string getEnvironmentId() 获取环境（命名空间）名称。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境（命名空间）名称。
 * @method string getTopicName() 获取主题名称。
 * @method void setTopicName(string $TopicName) 设置主题名称。
 * @method integer getCountConnect() 获取连接数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountConnect(integer $CountConnect) 设置连接数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConnectionSets() 获取连接集合。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectionSets(array $ConnectionSets) 设置连接集合。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Producer extends AbstractModel
{
    /**
     * @var string 环境（命名空间）名称。
     */
    public $EnvironmentId;

    /**
     * @var string 主题名称。
     */
    public $TopicName;

    /**
     * @var integer 连接数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CountConnect;

    /**
     * @var array 连接集合。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectionSets;

    /**
     * @param string $EnvironmentId 环境（命名空间）名称。
     * @param string $TopicName 主题名称。
     * @param integer $CountConnect 连接数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConnectionSets 连接集合。
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("CountConnect",$param) and $param["CountConnect"] !== null) {
            $this->CountConnect = $param["CountConnect"];
        }

        if (array_key_exists("ConnectionSets",$param) and $param["ConnectionSets"] !== null) {
            $this->ConnectionSets = [];
            foreach ($param["ConnectionSets"] as $key => $value){
                $obj = new Connection();
                $obj->deserialize($value);
                array_push($this->ConnectionSets, $obj);
            }
        }
    }
}
