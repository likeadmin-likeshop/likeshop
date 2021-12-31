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
 * CreateAlias请求参数结构体
 *
 * @method string getName() 获取名字，长度不小于1字符不超过1024字符
 * @method void setName(string $Name) 设置名字，长度不小于1字符不超过1024字符
 * @method RoutingStrategy getRoutingStrategy() 获取别名的路由配置
 * @method void setRoutingStrategy(RoutingStrategy $RoutingStrategy) 设置别名的路由配置
 * @method string getDescription() 获取别名的可读说明，长度不小于1字符不超过1024字符
 * @method void setDescription(string $Description) 设置别名的可读说明，长度不小于1字符不超过1024字符
 * @method array getTags() 获取标签列表，最大长度50组
 * @method void setTags(array $Tags) 设置标签列表，最大长度50组
 */
class CreateAliasRequest extends AbstractModel
{
    /**
     * @var string 名字，长度不小于1字符不超过1024字符
     */
    public $Name;

    /**
     * @var RoutingStrategy 别名的路由配置
     */
    public $RoutingStrategy;

    /**
     * @var string 别名的可读说明，长度不小于1字符不超过1024字符
     */
    public $Description;

    /**
     * @var array 标签列表，最大长度50组
     */
    public $Tags;

    /**
     * @param string $Name 名字，长度不小于1字符不超过1024字符
     * @param RoutingStrategy $RoutingStrategy 别名的路由配置
     * @param string $Description 别名的可读说明，长度不小于1字符不超过1024字符
     * @param array $Tags 标签列表，最大长度50组
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

        if (array_key_exists("RoutingStrategy",$param) and $param["RoutingStrategy"] !== null) {
            $this->RoutingStrategy = new RoutingStrategy();
            $this->RoutingStrategy->deserialize($param["RoutingStrategy"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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
