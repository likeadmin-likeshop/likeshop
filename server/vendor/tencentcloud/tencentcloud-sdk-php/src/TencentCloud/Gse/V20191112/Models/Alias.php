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
 * 别名对象
 *
 * @method string getAliasId() 获取别名的唯一标识符
 * @method void setAliasId(string $AliasId) 设置别名的唯一标识符
 * @method string getAliasArn() 获取别名的全局唯一资源标识符
 * @method void setAliasArn(string $AliasArn) 设置别名的全局唯一资源标识符
 * @method string getName() 获取名字，长度不小于1字符不超过1024字符
 * @method void setName(string $Name) 设置名字，长度不小于1字符不超过1024字符
 * @method string getDescription() 获取别名的可读说明，长度不小于1字符不超过1024字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置别名的可读说明，长度不小于1字符不超过1024字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method RoutingStrategy getRoutingStrategy() 获取别名的路由配置
 * @method void setRoutingStrategy(RoutingStrategy $RoutingStrategy) 设置别名的路由配置
 * @method string getCreationTime() 获取创建时间
 * @method void setCreationTime(string $CreationTime) 设置创建时间
 * @method string getLastUpdatedTime() 获取上次修改此数据对象的时间
 * @method void setLastUpdatedTime(string $LastUpdatedTime) 设置上次修改此数据对象的时间
 * @method array getTags() 获取标签列表，最大长度50组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签列表，最大长度50组
注意：此字段可能返回 null，表示取不到有效值。
 */
class Alias extends AbstractModel
{
    /**
     * @var string 别名的唯一标识符
     */
    public $AliasId;

    /**
     * @var string 别名的全局唯一资源标识符
     */
    public $AliasArn;

    /**
     * @var string 名字，长度不小于1字符不超过1024字符
     */
    public $Name;

    /**
     * @var string 别名的可读说明，长度不小于1字符不超过1024字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var RoutingStrategy 别名的路由配置
     */
    public $RoutingStrategy;

    /**
     * @var string 创建时间
     */
    public $CreationTime;

    /**
     * @var string 上次修改此数据对象的时间
     */
    public $LastUpdatedTime;

    /**
     * @var array 标签列表，最大长度50组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $AliasId 别名的唯一标识符
     * @param string $AliasArn 别名的全局唯一资源标识符
     * @param string $Name 名字，长度不小于1字符不超过1024字符
     * @param string $Description 别名的可读说明，长度不小于1字符不超过1024字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param RoutingStrategy $RoutingStrategy 别名的路由配置
     * @param string $CreationTime 创建时间
     * @param string $LastUpdatedTime 上次修改此数据对象的时间
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
        if (array_key_exists("AliasId",$param) and $param["AliasId"] !== null) {
            $this->AliasId = $param["AliasId"];
        }

        if (array_key_exists("AliasArn",$param) and $param["AliasArn"] !== null) {
            $this->AliasArn = $param["AliasArn"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RoutingStrategy",$param) and $param["RoutingStrategy"] !== null) {
            $this->RoutingStrategy = new RoutingStrategy();
            $this->RoutingStrategy->deserialize($param["RoutingStrategy"]);
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LastUpdatedTime",$param) and $param["LastUpdatedTime"] !== null) {
            $this->LastUpdatedTime = $param["LastUpdatedTime"];
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
