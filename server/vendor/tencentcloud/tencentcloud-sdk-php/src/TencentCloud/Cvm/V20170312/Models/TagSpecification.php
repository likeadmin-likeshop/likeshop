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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建资源实例时同时绑定的标签对说明
 *
 * @method string getResourceType() 获取标签绑定的资源类型，云服务器为“instance”，专用宿主机为“host”
 * @method void setResourceType(string $ResourceType) 设置标签绑定的资源类型，云服务器为“instance”，专用宿主机为“host”
 * @method array getTags() 获取标签对列表
 * @method void setTags(array $Tags) 设置标签对列表
 */
class TagSpecification extends AbstractModel
{
    /**
     * @var string 标签绑定的资源类型，云服务器为“instance”，专用宿主机为“host”
     */
    public $ResourceType;

    /**
     * @var array 标签对列表
     */
    public $Tags;

    /**
     * @param string $ResourceType 标签绑定的资源类型，云服务器为“instance”，专用宿主机为“host”
     * @param array $Tags 标签对列表
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
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
