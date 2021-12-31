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
 * 路由策略
 *
 * @method string getType() 获取别名的路由策略的类型，有效值常规别名(SIMPLE)、终止别名(TERMINAL)
 * @method void setType(string $Type) 设置别名的路由策略的类型，有效值常规别名(SIMPLE)、终止别名(TERMINAL)
 * @method string getFleetId() 获取别名指向的队列的唯一标识符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFleetId(string $FleetId) 设置别名指向的队列的唯一标识符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取与终端路由策略一起使用的消息文本，长度不小于1字符不超过1024字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置与终端路由策略一起使用的消息文本，长度不小于1字符不超过1024字符
注意：此字段可能返回 null，表示取不到有效值。
 */
class RoutingStrategy extends AbstractModel
{
    /**
     * @var string 别名的路由策略的类型，有效值常规别名(SIMPLE)、终止别名(TERMINAL)
     */
    public $Type;

    /**
     * @var string 别名指向的队列的唯一标识符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FleetId;

    /**
     * @var string 与终端路由策略一起使用的消息文本，长度不小于1字符不超过1024字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @param string $Type 别名的路由策略的类型，有效值常规别名(SIMPLE)、终止别名(TERMINAL)
     * @param string $FleetId 别名指向的队列的唯一标识符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 与终端路由策略一起使用的消息文本，长度不小于1字符不超过1024字符
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
