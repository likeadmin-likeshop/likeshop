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
 * 服务部署组对象
 *
 * @method string getName() 获取服务部署组名字
 * @method void setName(string $Name) 设置服务部署组名字
 * @method string getGameServerSessionQueueArn() 获取服务部署组资源
 * @method void setGameServerSessionQueueArn(string $GameServerSessionQueueArn) 设置服务部署组资源
 * @method array getDestinations() 获取目的fleet（可为别名）列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestinations(array $Destinations) 设置目的fleet（可为别名）列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPlayerLatencyPolicies() 获取延迟策略集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlayerLatencyPolicies(array $PlayerLatencyPolicies) 设置延迟策略集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeoutInSeconds() 获取超时时间
 * @method void setTimeoutInSeconds(integer $TimeoutInSeconds) 设置超时时间
 * @method array getTags() 获取标签列表，最大长度50组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签列表，最大长度50组
注意：此字段可能返回 null，表示取不到有效值。
 */
class GameServerSessionQueue extends AbstractModel
{
    /**
     * @var string 服务部署组名字
     */
    public $Name;

    /**
     * @var string 服务部署组资源
     */
    public $GameServerSessionQueueArn;

    /**
     * @var array 目的fleet（可为别名）列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Destinations;

    /**
     * @var array 延迟策略集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlayerLatencyPolicies;

    /**
     * @var integer 超时时间
     */
    public $TimeoutInSeconds;

    /**
     * @var array 标签列表，最大长度50组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $Name 服务部署组名字
     * @param string $GameServerSessionQueueArn 服务部署组资源
     * @param array $Destinations 目的fleet（可为别名）列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PlayerLatencyPolicies 延迟策略集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeoutInSeconds 超时时间
     * @param array $Tags 标签列表，最大长度50组
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("GameServerSessionQueueArn",$param) and $param["GameServerSessionQueueArn"] !== null) {
            $this->GameServerSessionQueueArn = $param["GameServerSessionQueueArn"];
        }

        if (array_key_exists("Destinations",$param) and $param["Destinations"] !== null) {
            $this->Destinations = [];
            foreach ($param["Destinations"] as $key => $value){
                $obj = new GameServerSessionQueueDestination();
                $obj->deserialize($value);
                array_push($this->Destinations, $obj);
            }
        }

        if (array_key_exists("PlayerLatencyPolicies",$param) and $param["PlayerLatencyPolicies"] !== null) {
            $this->PlayerLatencyPolicies = [];
            foreach ($param["PlayerLatencyPolicies"] as $key => $value){
                $obj = new PlayerLatencyPolicy();
                $obj->deserialize($value);
                array_push($this->PlayerLatencyPolicies, $obj);
            }
        }

        if (array_key_exists("TimeoutInSeconds",$param) and $param["TimeoutInSeconds"] !== null) {
            $this->TimeoutInSeconds = $param["TimeoutInSeconds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
