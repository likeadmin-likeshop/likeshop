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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateResource请求参数结构体
 *
 * @method string getNamespaceId() 获取命名空间 Id
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间 Id
 * @method string getResourceType() 获取资源类型，目前支持文件系统：CFS；日志服务：CLS；注册中心：TSE_SRE
 * @method void setResourceType(string $ResourceType) 设置资源类型，目前支持文件系统：CFS；日志服务：CLS；注册中心：TSE_SRE
 * @method string getResourceId() 获取资源 Id
 * @method void setResourceId(string $ResourceId) 设置资源 Id
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 */
class CreateResourceRequest extends AbstractModel
{
    /**
     * @var string 命名空间 Id
     */
    public $NamespaceId;

    /**
     * @var string 资源类型，目前支持文件系统：CFS；日志服务：CLS；注册中心：TSE_SRE
     */
    public $ResourceType;

    /**
     * @var string 资源 Id
     */
    public $ResourceId;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @param string $NamespaceId 命名空间 Id
     * @param string $ResourceType 资源类型，目前支持文件系统：CFS；日志服务：CLS；注册中心：TSE_SRE
     * @param string $ResourceId 资源 Id
     * @param integer $SourceChannel 来源渠道
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
