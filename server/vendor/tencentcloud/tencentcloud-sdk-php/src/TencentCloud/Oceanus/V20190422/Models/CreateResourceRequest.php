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
 * CreateResource请求参数结构体
 *
 * @method ResourceLoc getResourceLoc() 获取资源位置
 * @method void setResourceLoc(ResourceLoc $ResourceLoc) 设置资源位置
 * @method string getName() 获取资源名称
 * @method void setName(string $Name) 设置资源名称
 * @method integer getResourceType() 获取资源类型。目前只支持 JAR，取值为 1
 * @method void setResourceType(integer $ResourceType) 设置资源类型。目前只支持 JAR，取值为 1
 * @method string getRemark() 获取资源描述
 * @method void setRemark(string $Remark) 设置资源描述
 * @method string getResourceConfigRemark() 获取资源版本描述
 * @method void setResourceConfigRemark(string $ResourceConfigRemark) 设置资源版本描述
 */
class CreateResourceRequest extends AbstractModel
{
    /**
     * @var ResourceLoc 资源位置
     */
    public $ResourceLoc;

    /**
     * @var string 资源名称
     */
    public $Name;

    /**
     * @var integer 资源类型。目前只支持 JAR，取值为 1
     */
    public $ResourceType;

    /**
     * @var string 资源描述
     */
    public $Remark;

    /**
     * @var string 资源版本描述
     */
    public $ResourceConfigRemark;

    /**
     * @param ResourceLoc $ResourceLoc 资源位置
     * @param string $Name 资源名称
     * @param integer $ResourceType 资源类型。目前只支持 JAR，取值为 1
     * @param string $Remark 资源描述
     * @param string $ResourceConfigRemark 资源版本描述
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
        if (array_key_exists("ResourceLoc",$param) and $param["ResourceLoc"] !== null) {
            $this->ResourceLoc = new ResourceLoc();
            $this->ResourceLoc->deserialize($param["ResourceLoc"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ResourceConfigRemark",$param) and $param["ResourceConfigRemark"] !== null) {
            $this->ResourceConfigRemark = $param["ResourceConfigRemark"];
        }
    }
}
