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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateResourceConfig请求参数结构体
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method ResourceLoc getResourceLoc() 获取位置信息
 * @method void setResourceLoc(ResourceLoc $ResourceLoc) 设置位置信息
 * @method string getRemark() 获取资源描述信息
 * @method void setRemark(string $Remark) 设置资源描述信息
 * @method integer getAutoDelete() 获取1： 资源版本达到上限，自动删除最早可删除的版本
 * @method void setAutoDelete(integer $AutoDelete) 设置1： 资源版本达到上限，自动删除最早可删除的版本
 */
class CreateResourceConfigRequest extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var ResourceLoc 位置信息
     */
    public $ResourceLoc;

    /**
     * @var string 资源描述信息
     */
    public $Remark;

    /**
     * @var integer 1： 资源版本达到上限，自动删除最早可删除的版本
     */
    public $AutoDelete;

    /**
     * @param string $ResourceId 资源ID
     * @param ResourceLoc $ResourceLoc 位置信息
     * @param string $Remark 资源描述信息
     * @param integer $AutoDelete 1： 资源版本达到上限，自动删除最早可删除的版本
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceLoc",$param) and $param["ResourceLoc"] !== null) {
            $this->ResourceLoc = new ResourceLoc();
            $this->ResourceLoc->deserialize($param["ResourceLoc"]);
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AutoDelete",$param) and $param["AutoDelete"] !== null) {
            $this->AutoDelete = $param["AutoDelete"];
        }
    }
}
