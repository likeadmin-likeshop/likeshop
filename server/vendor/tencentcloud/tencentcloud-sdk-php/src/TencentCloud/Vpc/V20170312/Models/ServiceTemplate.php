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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 协议端口模板
 *
 * @method string getServiceTemplateId() 获取协议端口实例ID，例如：ppm-f5n1f8da。
 * @method void setServiceTemplateId(string $ServiceTemplateId) 设置协议端口实例ID，例如：ppm-f5n1f8da。
 * @method string getServiceTemplateName() 获取模板名称。
 * @method void setServiceTemplateName(string $ServiceTemplateName) 设置模板名称。
 * @method array getServiceSet() 获取协议端口信息。
 * @method void setServiceSet(array $ServiceSet) 设置协议端口信息。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 */
class ServiceTemplate extends AbstractModel
{
    /**
     * @var string 协议端口实例ID，例如：ppm-f5n1f8da。
     */
    public $ServiceTemplateId;

    /**
     * @var string 模板名称。
     */
    public $ServiceTemplateName;

    /**
     * @var array 协议端口信息。
     */
    public $ServiceSet;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @param string $ServiceTemplateId 协议端口实例ID，例如：ppm-f5n1f8da。
     * @param string $ServiceTemplateName 模板名称。
     * @param array $ServiceSet 协议端口信息。
     * @param string $CreatedTime 创建时间。
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
        if (array_key_exists("ServiceTemplateId",$param) and $param["ServiceTemplateId"] !== null) {
            $this->ServiceTemplateId = $param["ServiceTemplateId"];
        }

        if (array_key_exists("ServiceTemplateName",$param) and $param["ServiceTemplateName"] !== null) {
            $this->ServiceTemplateName = $param["ServiceTemplateName"];
        }

        if (array_key_exists("ServiceSet",$param) and $param["ServiceSet"] !== null) {
            $this->ServiceSet = $param["ServiceSet"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
