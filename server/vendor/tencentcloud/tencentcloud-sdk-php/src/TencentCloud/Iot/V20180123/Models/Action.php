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
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则引擎转发动作
 *
 * @method TopicAction getTopic() 获取转发至topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(TopicAction $Topic) 设置转发至topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServiceAction getService() 获取转发至第三发
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setService(ServiceAction $Service) 设置转发至第三发
注意：此字段可能返回 null，表示取不到有效值。
 * @method CkafkaAction getCkafka() 获取转发至第三发Ckafka
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCkafka(CkafkaAction $Ckafka) 设置转发至第三发Ckafka
注意：此字段可能返回 null，表示取不到有效值。
 */
class Action extends AbstractModel
{
    /**
     * @var TopicAction 转发至topic
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @var ServiceAction 转发至第三发
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Service;

    /**
     * @var CkafkaAction 转发至第三发Ckafka
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ckafka;

    /**
     * @param TopicAction $Topic 转发至topic
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServiceAction $Service 转发至第三发
注意：此字段可能返回 null，表示取不到有效值。
     * @param CkafkaAction $Ckafka 转发至第三发Ckafka
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = new TopicAction();
            $this->Topic->deserialize($param["Topic"]);
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = new ServiceAction();
            $this->Service->deserialize($param["Service"]);
        }

        if (array_key_exists("Ckafka",$param) and $param["Ckafka"] !== null) {
            $this->Ckafka = new CkafkaAction();
            $this->Ckafka->deserialize($param["Ckafka"]);
        }
    }
}
